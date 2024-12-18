import React from "react";
import { Link, useLocation } from 'react-router-dom';
import './navbar.css';

const Navbar = () => {
    return (
        <div className="auth-navbar">
            <img className="logo" src="/assets/svg/landing/logo-login.svg" />
            <div className="join-text">
                <Link to="#" className="join-as-a-client-or-join-as-a-company-span">
                    Join as a client
                </Link>
                <span className="join-as-a-client-or-join-as-a-company-span2">
                    or
                </span>
                <Link to="#" className="join-as-a-client-or-join-as-a-company-span3">
                    Join as a company
                </Link>
            </div>
        </div>
    );
};


export default Navbar;