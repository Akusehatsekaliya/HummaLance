import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, useNavigate } from 'react-router-dom';
import axios from 'axios';

import Navbar from './auth/components/navbar';

import Register from './auth/register';
import Journey from './auth/journey';

import '/resources/css/transition.css';
import '/resources/css/auth.css';

function RouteArea() {
    return (
        <Routes>
            <Route path="/react/auth/register" exact element={<Register />} />
            <Route path="/react/auth/journey" element={<Journey />} />
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
