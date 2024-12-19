import React, { useContext } from 'react';
import { AuthContext } from '@context/AuthContext';

const Register = () => {
    const { authState, setAuthState } = useContext(AuthContext);

    const popupCenter = ({ url, title, w, h }) => {
        const width = window.innerWidth;
        const height = window.innerHeight;
        const left = (width - w) / 2 + window.screenLeft;
        const top = (height - h) / 2 + window.screenTop;

        const newWindow = window.open(
            url,
            title,
            `popup=true,toolbar=no,location=no,status=no,menubar=no,resizable=no,scrollbars=yes,width=${w},height=${h},top=${top},left=${left}`
        );

        if (newWindow) newWindow.focus();
        return newWindow;
    };

    const handleMessage = (event, loginPopup, clearPopupCheck) => {
        if (event.origin !== window.location.origin || event.source !== loginPopup) return;

        if (event.data?.access_token && event.data?.user) {
            const expirationTime = Date.now() + event.data.expires_in * 1000;

            localStorage.setItem('access_token', event.data.access_token);
            localStorage.setItem('token_expiration', expirationTime);

            setAuthState({
                isAuthenticated: true,
                user: event.data.user,
                token: event.data.access_token,
            });
        }
        clearPopupCheck();
        loginPopup.close();
    };

    const monitorPopup = (loginPopup, clearPopupCheck) => {
        const interval = setInterval(() => {
            if (loginPopup.closed) {
                clearPopupCheck();
            }
        }, 500);

        return () => clearInterval(interval);
    };

    const handleGoogleClick = () => {
        const loginPopup = popupCenter({ url: "/login/google", title: "Clocker Login", w: 500, h: 600 });
        if (!loginPopup) return console.error("Failed to open login popup.");

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
                <div className="header mt-5">
                    <div className="d-flex justify-content-between gap-5">
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
                                <span>{"Continue As User"}</span>
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
