import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import { AuthProvider } from './contexts/AuthContext';
import { AUTH_ROUTES } from './config/routes';
import PrivateRoute from './components/PrivateRoute';

// Components
import Navbar from './auth/components/Navbar';
import Register from './auth/Register';
import Journey from './auth/Journey';
import Adventure from './auth/Adventure';

// import '/resources/css/auth.css';

function RouteArea() {
    return (
        <Routes>
            <Route
                path={AUTH_ROUTES.REGISTER}
                element={
                    <PrivateRoute auth={false} redirectTo={AUTH_ROUTES.JOURNEY}>
                        <Register />
                    </PrivateRoute>
                }
            />
            <Route
                path={AUTH_ROUTES.JOURNEY}
                element={
                    <PrivateRoute auth={true} redirectTo={AUTH_ROUTES.REGISTER}>
                        <Journey />
                    </PrivateRoute>
                }
            />
            <Route
                path={AUTH_ROUTES.ADVENTURE}
                element={
                    <PrivateRoute auth={true} redirectTo={AUTH_ROUTES.REGISTER}>
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