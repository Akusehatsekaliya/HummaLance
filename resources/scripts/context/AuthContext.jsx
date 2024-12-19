import React, { createContext, useState, useEffect } from 'react';
import axios from 'axios';

export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
    const [authState, setAuthState] = useState({
        isAuthenticated: false,
        user: null,
        token: null,
    });

    const checkAuth = async () => {
        const token = localStorage.getItem('access_token');
        const expiration = localStorage.getItem('token_expiration');

        if (!token || Date.now() > parseInt(expiration, 10)) {
            localStorage.clear();
            setAuthState({ isAuthenticated: false, user: null, token: null });
            return;
        }

        try {
            const { data } = await axios.get('/api/user', {
                headers: { Authorization: `Bearer ${token}` },
            });
            setAuthState({
                isAuthenticated: data.authenticated || false,
                user: data.user || null,
                token,
            });
        } catch {
            localStorage.clear();
            setAuthState({ isAuthenticated: false, user: null, token: null });
        }
    };

    useEffect(() => {
        checkAuth();
    }, []);

    return (
        <AuthContext.Provider value={{ authState, setAuthState }}>
            {children}
        </AuthContext.Provider>
    );
};
