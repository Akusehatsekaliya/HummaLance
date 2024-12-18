import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import axios from 'axios';

const Register = () => {
    const navigate = useNavigate();
    const [state, setState] = useState({
        isAuthorized: false,
        userInfo: null,
    });

    const { isAuthorized } = state;

    const fetchUser = async () => {
        try {
            const response = await axios.get("/auth/check");
            setState((prevState) => ({
                ...prevState,
                isAuthorized: response.data.authorized,
                userInfo: response.data.userInfo || null,
            }));
        } catch (error) {
            console.error("Error fetching user data:", error);
        }
    };
    useEffect(() => {

        fetchUser();
    }, []);

    useEffect(() => {
        if (isAuthorized) {
            navigate("/react/auth/journey");
        }
    }, [isAuthorized, navigate]);

    const popupCenter = ({ url, title, w, h }) => {
        const width = window.innerWidth || document.documentElement.clientWidth || screen.width;
        const height = window.innerHeight || document.documentElement.clientHeight || screen.height;

        const systemZoom = width / window.screen.availWidth;
        const left = (width - w) / 2 / systemZoom + window.screenLeft;
        const top = (height - h) / 2 / systemZoom + window.screenTop;

        const newWindow = window.open(
            url,
            title,
            `popup=true,toolbar=no,location=no,status=no,menubar=no,resizable=no,scrollbars=yes,
             width=${w / systemZoom},height=${h / systemZoom},top=${top},left=${left}`
        );

        if (!newWindow) {
            console.error('Popup failed to open.');
            return null;
        }
        newWindow.focus();
        return newWindow;
    };

    const handleGoogleClick = () => {
        const loginPopup = popupCenter({ url: '/login/google', title: 'Clocker Login', w: 500, h: 600 });

        if (!loginPopup) return;

        const popupChecker = setInterval(async () => {
            try {
                if (loginPopup.closed) {
                    clearInterval(popupChecker);
                    await fetchUser(); // Fetch updated user data when popup is closed
                }
            } catch (error) {
                console.error('Error checking authorization:', error);
                clearInterval(popupChecker);
            }
        }, 500);
    };

    return (
        <div className="col-lg-7">
            <div className="card-register">
                <h4 className="justify-content-center d-flex">Sign up to start your freelance career</h4>
                <div id="header" className="header">
                    <div className="justify-content-between d-flex mt-5 gap-5">
                        <button className="linkedin-register">
                            <img src="/assets/svg/icons/mdi_linkedin.svg" alt="LinkedIn" />
                            Continue With LinkedIn
                        </button>
                        <button className="google-register" onClick={handleGoogleClick}>
                            <img
                                src="/assets/images/c0ab57ca036251e04177a7fc61040073.jfif"
                                alt="Profile"
                                className="profile-icon"
                            />
                            <div className="text-area">
                                <span>
                                    {state.userInfo?.name || "Continue As User"}
                                </span>
                                <span>
                                    {state.userInfo?.email || "example@gmail.com"}
                                </span>
                            </div>
                            <img
                                src="/assets/svg/icons/flat-color-icons_google.svg"
                                alt="Google"
                                className="btn-icon"
                            />
                        </button>
                    </div>
                    <div className="d-flex align-items-center my-3">
                        <hr className="flex-grow-1 thick-line" />
                        <span className="mx-2 text-body-2">or</span>
                        <hr className="flex-grow-1 thick-line" />
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Register;
