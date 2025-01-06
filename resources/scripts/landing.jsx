import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import { LANDING_ROUTES } from './config/routes';

// Components
import Navbar from '@components/landing/Navbar';
// import Register from './auth/Register';
import Journey from './auth/Journey';
import Adventure from './auth/Adventure';

// import '/resources/css/auth.css';

function RouteArea() {
    return (
        <Routes>
            {/* <Route
                path={LANDING_ROUTES.DASHBOARD}
                element={<Register />}
            /> */}
        </Routes>
    );
}

function App() {
    return (
        <Router>
            <Navbar />
            <div id="main" className='content container'>
                <RouteArea />
            </div>
        </Router>
    );
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />);