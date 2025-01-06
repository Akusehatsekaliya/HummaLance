import React, { createContext, useState, useEffect } from 'react';
import api from '../config/api';

export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
    const [authState, setAuthState] = useState({
        isAuthenticated: false,
        user: null,
        token: null,
        loading: true
    });

    const login = (token, user, expiresIn) => {
        const expirationTime = Date.now() + expiresIn * 1000;
        localStorage.setItem('access_token', token);
        localStorage.setItem('token_expiration', expirationTime);

        setAuthState({
            isAuthenticated: true,
            user,
            token,
            loading: false
        });
    };

    const logout = () => {
        localStorage.clear();
        setAuthState({
            isAuthenticated: false,
            user: null,
            token: null,
            loading: false
        });
    };

    const checkAuth = async () => {
        const token = localStorage.getItem('access_token');
        const expiration = localStorage.getItem('token_expiration');

        if (!token || Date.now() > parseInt(expiration, 10)) {
            logout();
            return;
        }

        try {
            const { data } = await api.get('/user');
            setAuthState({
                isAuthenticated: true,
                user: data.user,
                token,
                loading: false
            });
        } catch (error) {
            logout();
        }
    };

    useEffect(() => {
        checkAuth();
    }, []);

    const value = {
        authState,
        setAuthState,
        login,
        logout,
        checkAuth
    };

    return (
        <AuthContext.Provider value={value}>
            {!authState.loading ? children : <div>Loading...</div>}
        </AuthContext.Provider>
    );
};