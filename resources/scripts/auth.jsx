import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, useNavigate } from 'react-router-dom';
import { AuthProvider, AuthContext } from '@context/AuthContext';
import PrivateRoute from '@components/PrivateRoute';

import Navbar from '@auth/components/navbar';

import Register from '@auth/register';
import Journey from '@auth/journey';
import Adventure from '@auth/adventure';

import '/resources/css/auth.css';

function RouteArea() {
    // const { authState } = useContext(AuthContext);
    return (
        <Routes>
            <Route
                path="/react/auth/register"
                element={
                    <PrivateRoute auth={false} redirectTo="/react/auth/journey">
                        <Register />
                    </PrivateRoute>
                }
            />
            <Route
                path="/react/auth/journey"
                element={
                    <PrivateRoute auth={true} redirectTo="/react/auth/register">
                        <Journey />
                    </PrivateRoute>
                }
            />
            <Route
                path="/react/auth/adventure"
                element={
                    <PrivateRoute auth={true} redirectTo="/react/auth/register">
                        <Adventure />
                    </PrivateRoute>
                }
            />
        </Routes>
    );
}

function App() {
    return (
        <AuthProvider>
            <Router>
                <Navbar />
                <div id="main" className='content container'>
                    <RouteArea />
                </div>
            </Router>
        </AuthProvider>
    );
}


ReactDOM.createRoot(document.getElementById('app')).render(<App />);
