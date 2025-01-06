import React, { useState, useEffect, useContext } from 'react';
import { AuthContext } from '@contexts/AuthContext';
import API from '@components/apiAxios';
import { useNavigate } from 'react-router-dom';

import '@authCss/adventure.css'

const Adventure = () => {
    const navigate = useNavigate();
    const { authState, setAuthState } = useContext(AuthContext);
    const [formData, setFormData] = useState({
        password: '',
        country: '',
        day: '',
        month: '1',
        year: '2024',
        emailsOptIn: false,
        termsAccepted: false,
    });

    const [errors, setErrors] = useState({});

    const countries = [
        { name: 'US', value: 'United States' },
        { name: 'IN', value: 'India' },
        { name: 'GB', value: 'United Kingdom' },
    ];

    // Function to handle form changes
    const handleChange = ({ target: { name, value, type, checked } }) => {
        setFormData((prevState) => ({
            ...prevState,
            [name]: type === 'checkbox' ? checked : value,
        }));
    };

    // Validation function
    const validateForm = () => {
        const newErrors = {};
        const { password, country, day, month, year, termsAccepted } = formData;

        if (!password) newErrors.password = 'Password is required';
        if (!country) newErrors.country = 'Country is required';
        if (!day || !month || !year) {
            newErrors.dateOfBirth = 'Please select a valid date of birth';
        } else if (parseInt(day) < 1 || parseInt(day) > 31) {
            newErrors.day = 'Day must be between 1 and 31';
        }
        if (!termsAccepted) newErrors.termsAccepted = 'You must agree to the terms and conditions';

        return newErrors;
    };

    // Form submit handler
    const handleSubmit = async (e) => {
        e.preventDefault();
        const newErrors = validateForm();

        setErrors(newErrors);

        if (Object.keys(newErrors).length === 0) {
            const token = localStorage.getItem('access_token');

            try {
                const response = await API.post('/auth/adventure', formData, {
                    headers: { Authorization: `Bearer ${token}` },
                });
                navigate("/react/auth/adventure");
                console.log('Form submitted successfully:', response.data);
            } catch (error) {
                console.error('Error submitting form:', error);
            }
        }
    };

    const currentYear = new Date().getFullYear();

    return (
        <div className='d-flex justify-content-center'>
            <div className="px-5 justify-content-center d-flex">
                <div className="col-lg-5 right-section justify-content-center d-flex">
                    <div className="image-container">
                        <img
                            alt="Illustration of a person working on a laptop"
                            height="400"
                            src="http://127.0.0.1:8000/assets_landing/images/adventure.png"
                        />
                    </div>
                </div>
                <div className="col-lg-6 right-section">
                    <h1 style={{ fontWeight: 'bold' }}>
                        Hey {authState.user.first_name}, Are you ready for your big
                        <span> adventure</span> in CLOCKER?
                    </h1>
                    <ul>
                        <li>
                            <svg width="22" height="23" viewBox="0 0 28 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.0003 20.3263C8.50911 20.3263 4.03711 15.8543 4.03711 10.3631C4.03711 4.8719 8.50911 0.399902 14.0003 0.399902C19.4915 0.399902 23.9635 4.8719 23.9635 10.3631C23.9635 15.8543 19.4915 20.3263 14.0003 20.3263ZM14.0003 3.2391C10.0795 3.2391 6.88671 6.4319 6.88671 10.3527C6.88671 14.2735 10.0795 17.4663 14.0003 17.4663C17.9211 17.4663 21.1139 14.2735 21.1139 10.3527C21.1139 6.4319 17.9211 3.2391 14.0003 3.2391Z" fill="#423D55"></path>
                                <path d="M28.2379 31.7142H25.3883C25.3883 25.4326 20.2819 20.3262 14.0003 20.3262C7.71869 20.3262 2.6123 25.4326 2.6123 31.7142H-0.237305C-0.237305 23.8622 6.14829 17.4766 14.0003 17.4766C21.8523 17.4766 28.2379 23.8622 28.2379 31.7142Z" fill="#423D55"></path>
                            </svg>

                            Complete Your Freelancer Account
                        </li>
                        <li>
                            <svg width="22" height="23" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.875 5C3.875 3.67392 4.38532 2.40215 5.2937 1.46447C6.20208 0.526784 7.43411 0 8.71875 0H26.1562C27.4409 0 28.6729 0.526784 29.5813 1.46447C30.4897 2.40215 31 3.67392 31 5V19C31 20.3261 30.4897 21.5979 29.5813 22.5355C28.6729 23.4732 27.4409 24 26.1562 24H8.71875C7.43411 24 6.20208 23.4732 5.2937 22.5355C4.38532 21.5979 3.875 20.3261 3.875 19V5ZM16.9454 13.862L5.8125 7.922V19C5.8125 19.7956 6.11869 20.5587 6.66372 21.1213C7.20875 21.6839 7.94796 22 8.71875 22H26.1562C26.927 22 27.6663 21.6839 28.2113 21.1213C28.7563 20.5587 29.0625 19.7956 29.0625 19V7.926L17.9296 13.862L17.7708 13.938C17.6363 13.9891 17.4925 14.0088 17.3498 13.9957C17.2071 13.9826 17.0689 13.9369 16.9454 13.862ZM26.1562 2H8.71875C7.94796 2 7.20875 2.31607 6.66372 2.87868C6.11869 3.44129 5.8125 4.20435 5.8125 5V5.602L17.4375 11.84L29.0625 5.604V5C29.0625 4.20435 28.7563 3.44129 28.2113 2.87868C27.6663 2.31607 26.927 2 26.1562 2ZM22.2812 28C23.8661 28 25.2728 27.214 26.1562 26H8.71875C6.92025 26 5.19541 25.2625 3.92368 23.9497C2.65195 22.637 1.9375 20.8565 1.9375 19V5C0.761438 5.912 0 7.364 0 9V19C0 21.3869 0.91858 23.6761 2.55366 25.364C4.18875 27.0518 6.40639 28 8.71875 28H22.2812Z" fill="#423D55"></path>
                            </svg>

                            Apply for open roles or list services for clients to buy
                        </li>
                        <li>
                            <svg width="23" height="23" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.64535 7.49144C5.39822 7.49144 6.12026 7.19205 6.65262 6.65913C7.18498 6.12622 7.48406 5.40343 7.48406 4.64977C7.48406 3.89612 7.18498 3.17333 6.65262 2.64041C6.12026 2.10749 5.39822 1.80811 4.64535 1.80811C3.89248 1.80811 3.17044 2.10749 2.63808 2.64041C2.10572 3.17333 1.80664 3.89612 1.80664 4.64977C1.80664 5.40343 2.10572 6.12622 2.63808 6.65913C3.17044 7.19205 3.89248 7.49144 4.64535 7.49144ZM6.06471 28.8039C7.19401 28.8039 8.27707 28.3549 9.07561 27.5555C9.87415 26.7561 10.3228 25.6719 10.3228 24.5414C10.3228 23.411 9.87415 22.3268 9.07561 21.5274C8.27707 20.728 7.19401 20.2789 6.06471 20.2789C4.9354 20.2789 3.85234 20.728 3.0538 21.5274C2.25526 22.3268 1.80664 23.411 1.80664 24.5414C1.80664 25.6719 2.25526 26.7561 3.0538 27.5555C3.85234 28.3549 4.9354 28.8039 6.06471 28.8039ZM25.9357 30.2248C27.065 30.2248 28.148 29.7757 28.9466 28.9763C29.7451 28.1769 30.1937 27.0928 30.1937 25.9623C30.1937 24.8318 29.7451 23.7476 28.9466 22.9482C28.148 22.1489 27.065 21.6998 25.9357 21.6998C24.8064 21.6998 23.7233 22.1489 22.9248 22.9482C22.1262 23.7476 21.6776 24.8318 21.6776 25.9623C21.6776 27.0928 22.1262 28.1769 22.9248 28.9763C23.7233 29.7757 24.8064 30.2248 25.9357 30.2248ZM14.5808 18.8581C16.0866 18.8581 17.5307 18.2593 18.5954 17.1935C19.6601 16.1277 20.2583 14.6821 20.2583 13.1748C20.2583 11.6675 19.6601 10.2219 18.5954 9.15605C17.5307 8.09022 16.0866 7.49144 14.5808 7.49144C13.0751 7.49144 11.631 8.09022 10.5663 9.15605C9.50157 10.2219 8.90341 11.6675 8.90341 13.1748C8.90341 14.6821 9.50157 16.1277 10.5663 17.1935C11.631 18.2593 13.0751 18.8581 14.5808 18.8581ZM23.097 7.49144C23.8498 7.49144 24.5719 7.19205 25.1042 6.65913C25.6366 6.12622 25.9357 5.40343 25.9357 4.64977C25.9357 3.89612 25.6366 3.17333 25.1042 2.64041C24.5719 2.10749 23.8498 1.80811 23.097 1.80811C22.3441 1.80811 21.6221 2.10749 21.0897 2.64041C20.5573 3.17333 20.2583 3.89612 20.2583 4.64977C20.2583 5.40343 20.5573 6.12622 21.0897 6.65913C21.6221 7.19205 22.3441 7.49144 23.097 7.49144Z" stroke="#423D55" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                                <path d="M6.77441 6.78125L9.61312 9.62292M20.2583 7.49167L18.8389 8.9125M23.097 22.7656L18.8389 17.4375M8.90345 20.9896L11.7422 18.1479" stroke="#423D55" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                            </svg>

                            Apply for open roles or list services for clients to buy
                        </li>
                        <li>
                            <svg width="28" height="24" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clipPath="url(#clip0_1459_641)">
                                    <path d="M13.8722 0.311798C14.5064 0.0755611 15.1994 0.0447635 15.8522 0.223798L16.1286 0.311798L27.3786 4.5118C27.9491 4.72474 28.4469 5.09469 28.8143 5.57852C29.1816 6.06236 29.4033 6.64016 29.4535 7.2446L29.4647 7.5086V16.0894C29.4646 18.6821 28.7615 21.2266 27.4294 23.4545C26.0974 25.6824 24.1859 27.5109 21.8967 28.747L21.4692 28.9694L16.0788 31.6526C15.782 31.8001 15.4578 31.8851 15.1265 31.9022C14.7952 31.9192 14.464 31.868 14.1535 31.7518L13.922 31.6526L8.53167 28.9694C6.20229 27.8099 4.23059 26.0457 2.82471 23.8632C1.41883 21.6807 0.630923 19.1607 0.544169 16.5694L0.536133 16.0894V7.5086C0.536142 6.90241 0.709104 6.30868 1.03488 5.79655C1.36066 5.28442 1.82586 4.87495 2.37631 4.6158L2.6222 4.5118L13.8722 0.311798ZM15.0004 3.3086L3.75042 7.5086V16.0894C3.75046 18.0974 4.29275 20.0685 5.32053 21.7962C6.3483 23.524 7.82374 24.9449 9.59238 25.9102L9.97006 26.107L15.0004 28.611L20.0308 26.107C21.8352 25.209 23.3638 23.8445 24.4566 22.1564C25.5495 20.4683 26.1662 18.5187 26.2424 16.5118L26.2504 16.0894V7.5086L15.0004 3.3086ZM20.5177 10.6062C20.807 10.3192 21.195 10.1526 21.6032 10.1402C22.0113 10.1278 22.4089 10.2705 22.7151 10.5394C23.0214 10.8083 23.2134 11.1831 23.2521 11.5878C23.2909 11.9924 23.1734 12.3966 22.9236 12.7182L22.7902 12.8686L14.3785 21.2446C14.072 21.5496 13.6638 21.732 13.2312 21.757C12.7987 21.7821 12.3719 21.6481 12.032 21.3806L11.8777 21.2446L8.01417 17.3982C7.72287 17.1109 7.55287 16.7237 7.53896 16.3157C7.52506 15.9078 7.66831 15.5099 7.93938 15.2037C8.21046 14.8974 8.58886 14.7059 8.99714 14.6683C9.40541 14.6307 9.81269 14.7498 10.1356 15.0014L10.2867 15.1342L13.1281 17.963L20.5177 10.6062Z" fill="#423D55"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1459_641">
                                        <rect width="30" height="32" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>

                            Get paid safely and know we're here to help
                        </li>
                    </ul>
                    <a className="btn" href="" style={{ fontWeight: "bold", fontSize: "14px" }}>
                        Get Started
                        <svg width="19" height="24" viewBox="0 0 19 24" style={{ marginLeft: "8px" }} fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clipPath="url(#clip0_1459_649)">
                                <path d="M17.7166 13.0598C17.9975 12.7785 18.1553 12.3973 18.1553 11.9998C18.1553 11.6023 17.9975 11.221 17.7166 10.9398L12.0606 5.28079C11.7792 4.99939 11.3975 4.84131 10.9996 4.84131C10.6016 4.84131 10.22 4.99939 9.93859 5.28079C9.6572 5.56218 9.49911 5.94384 9.49911 6.34179C9.49911 6.73974 9.6572 7.12139 9.93859 7.40279L13.0346 10.4998L1.49959 10.4998C1.10177 10.4998 0.720239 10.6578 0.438934 10.9391C0.157629 11.2204 -0.000406561 11.602 -0.000406578 11.9998C-0.000406596 12.3976 0.157629 12.7791 0.438934 13.0604C0.720239 13.3418 1.10177 13.4998 1.49959 13.4998L13.0346 13.4998L9.93859 16.5958C9.79926 16.7351 9.68874 16.9005 9.61333 17.0826C9.53792 17.2646 9.49911 17.4597 9.49911 17.6568C9.49911 17.8538 9.53792 18.049 9.61333 18.231C9.68874 18.413 9.79926 18.5785 9.93859 18.7178C10.0779 18.8571 10.2433 18.9676 10.4254 19.0431C10.6074 19.1185 10.8025 19.1573 10.9996 19.1573C11.1966 19.1573 11.3918 19.1185 11.5738 19.0431C11.7558 18.9676 11.9213 18.8571 12.0606 18.7178L17.7166 13.0598Z" fill="white"></path> </g>
                            <defs>
                                <clipPath id="clip0_1459_649">
                                    <rect width="24" height="19" fill="white" transform="translate(19) rotate(90)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    );
};

export default Adventure;
