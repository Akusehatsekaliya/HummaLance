import React, { useRef } from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, useLocation } from 'react-router-dom';
import { SidebarProvider } from './admin/context/is-sidebar-active';
import { CSSTransition, TransitionGroup } from 'react-transition-group';

import Register from './auth/register';

import '/resources/css/transition.css';

function AnimatedRoutes() {
    const location = useLocation();
    const nodeRef = useRef(null);

    return (
        <TransitionGroup>
            <CSSTransition
                key={location.key}
                classNames="page"
                timeout={300}
                nodeRef={nodeRef}
            >
                <div ref={nodeRef}>
                    <Routes location={location}>
                        <Route path="/react/auth/register" exact element={<Register />} />
                    </Routes>
                </div>
            </CSSTransition>
        </TransitionGroup>
    );
}


function App() {
    return (
        <Router>
            <div id="main">
                <AnimatedRoutes />
            </div>
        </Router>
    );
}


ReactDOM.createRoot(document.getElementById('app')).render(<App />);
