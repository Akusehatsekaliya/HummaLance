import React, { useContext } from 'react';
import { Navigate } from 'react-router-dom';
import { AuthContext } from '@context/AuthContext';

const PrivateRoute = ({ children, auth = true, redirectTo = "/login" }) => {
    const { authState } = useContext(AuthContext);

    if (authState.isAuthenticated !== auth) {
        if (!authState.isAuthenticated) localStorage.clear();
        return <Navigate to={redirectTo} />;
    }

    return children;
};

export default PrivateRoute;
