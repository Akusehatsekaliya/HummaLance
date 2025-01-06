import React, { useContext, useState } from 'react';
import { AuthContext } from '@contexts/AuthContext';

const Register = () => {
    const { authState, login } = useContext(AuthContext);
    const [error, setError] = useState(null);
    const [loading, setLoading] = useState(false);

    const popupCenter = ({ url, title, w, h }) => {
        const dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : window.screenX;
        const dualScreenTop = window.screenTop !== undefined ? window.screenTop : window.screenY;

        const width = window.innerWidth || document.documentElement.clientWidth || screen.width;
        const height = window.innerHeight || document.documentElement.clientHeight || screen.height;

        const systemZoom = width / window.screen.availWidth;
        const left = (width - w) / 2 / systemZoom + dualScreenLeft;
        const top = (height - h) / 2 / systemZoom + dualScreenTop;

        const newWindow = window.open(
            url,
            title,
            `
                scrollbars=yes,
                width=${w / systemZoom}, 
                height=${h / systemZoom}, 
                top=${top}, 
                left=${left}
            `
        );

        if (newWindow) newWindow.focus();
        return newWindow;
    };

    const handleMessage = (event, loginPopup, clearPopupCheck) => {
        if (event.origin !== window.location.origin || event.source !== loginPopup) return;

        try {
            if (event.data?.access_token && event.data?.user) {
                login(event.data.access_token, event.data.user, event.data.expires_in);
            }
        } catch (err) {
            setError('Authentication failed. Please try again.');
        } finally {
            clearPopupCheck();
            loginPopup.close();
        }
    };

    const monitorPopup = (loginPopup, clearPopupCheck) => {
        const interval = setInterval(() => {
            if (loginPopup.closed) {
                clearPopupCheck();
                setLoading(false);
            }
        }, 500);

        return () => clearInterval(interval);
    };

    const handleGoogleClick = () => {
        setLoading(true);
        setError(null);

        const loginPopup = popupCenter({
            url: "/login/google",
            title: "Clocker Login",
            w: 500,
            h: 600
        });

        if (!loginPopup) {
            setError('Failed to open login popup. Please disable popup blocker.');
            setLoading(false);
            return;
        }

        const clearPopupCheck = monitorPopup(loginPopup, () => {
            window.removeEventListener("message", messageHandler);
        });

        const messageHandler = (event) => handleMessage(event, loginPopup, clearPopupCheck);
        window.addEventListener("message", messageHandler);
    };

    return (
        <div className="col-lg-7">
            <div className="card-register">
                <h4 className="text-center">Sign up to start your freelance career</h4>

                {error && (
                    <div className="alert alert-danger" role="alert">
                        {error}
                    </div>
                )}

                <div className="header mt-5">
                    <div className="d-flex justify-content-between gap-5">
                        <button
                            className="linkedin-register"
                            disabled={loading}
                        >
                            <img src="/assets/svg/icons/mdi_linkedin.svg" alt="LinkedIn" />
                            Continue With LinkedIn
                        </button>
                        <button
                            className="google-register"
                            onClick={handleGoogleClick}
                            disabled={loading}
                        >
                            <img
                                src="/assets/images/c0ab57ca036251e04177a7fc61040073.jfif"
                                alt="Profile"
                                className="profile-icon"
                            />
                            <div className="text-area">
                                <span>{loading ? "Connecting..." : "Continue As User"}</span>
                                <span>{authState?.user?.email || "example@gmail.com"}</span>
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