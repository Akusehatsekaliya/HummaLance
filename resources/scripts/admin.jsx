import React, { useRef } from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, useLocation } from 'react-router-dom';
import { CSSTransition, TransitionGroup } from 'react-transition-group';

import Dashboard from './admin/page/dashboard';
import Banner from './admin/page/banner';
import AboutUs from './admin/page/aboutUs';

import Navbar from './admin/components/navbar';
import Sidebar from './admin/components/sidebar';
import Footer from './admin/components/footer';

import '../css/transition.css';

function AnimatedRoutes() {
    const location = useLocation();
    const nodeRef = useRef(null);

    return (
        <TransitionGroup>
            <CSSTransition
                key={location.key}
                classNames="page"
                timeout={300}
            >
                <div ref={nodeRef}>
                    <Routes location={location}>
                        <Route
                            path="/react/admin"
                            exact
                            element={<Dashboard
                                totalUser="20"
                                totalCompany="20"
                                totalProject="20"
                                totalContract="20"
                            />}
                        />
                        <Route path="/react/admin/banner" element={<Banner />} />
                        <Route path="/react/admin/about" element={<AboutUs />} />
                    </Routes>
                </div>
            </CSSTransition>
        </TransitionGroup>
    );
}

function App() {
    return (
        <Router>
            <Sidebar />
            <Navbar />
            <div id="main">
                <AnimatedRoutes />
                <Footer />
            </div>
        </Router>
    );
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />);
