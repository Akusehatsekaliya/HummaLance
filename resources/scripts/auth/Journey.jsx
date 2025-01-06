import React, { useState, useContext } from 'react';
import { useNavigate } from 'react-router-dom';
import { AuthContext } from '../contexts/AuthContext';
import api from '../config/api';
import { AUTH_ROUTES } from '../config/routes';
import { DotLottieReact } from '@lottiefiles/dotlottie-react';

// Move to separate config file
const COUNTRIES = [
    { name: 'US', value: 'United States' },
    { name: 'IN', value: 'India' },
    { name: 'GB', value: 'United Kingdom' },
];

const INITIAL_FORM_STATE = {
    password: '',
    country: '',
    day: '',
    month: '1',
    year: '2024',
    emailsOptIn: false,
    termsAccepted: false,
};

const Journey = () => {
    const navigate = useNavigate();
    const { authState, setAuthState } = useContext(AuthContext);
    const [formData, setFormData] = useState(INITIAL_FORM_STATE);
    const [errors, setErrors] = useState({});
    const [loading, setLoading] = useState(false);
    const [loadingText, setLoadingText] = useState('Creating an freelance account');
    const [submitError, setSubmitError] = useState(null);

    const handleChange = ({ target: { name, value, type, checked } }) => {
        setFormData(prev => ({
            ...prev,
            [name]: type === 'checkbox' ? checked : value,
        }));
        if (errors[name]) {
            setErrors(prev => ({ ...prev, [name]: null }));
        }
    };

    const validateForm = () => {
        const newErrors = {};
        const { password, country, day, month, year, termsAccepted } = formData;

        if (!password || password.length < 8) {
            newErrors.password = 'Password must be at least 8 characters';
        }
        if (!country) {
            newErrors.country = 'Country is required';
        }
        if (!day || !month || !year) {
            newErrors.dateOfBirth = 'Please select a valid date of birth';
        } else {
            const date = new Date(year, month - 1, day);
            if (date.getDate() !== parseInt(day)) {
                newErrors.day = 'Invalid date';
            }
        }
        if (!termsAccepted) {
            newErrors.termsAccepted = 'You must agree to the terms and conditions';
        }

        return newErrors;
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        const newErrors = validateForm();
        setErrors(newErrors);

        if (Object.keys(newErrors).length === 0) {
            setLoading(true);
            setSubmitError(null);

            try {
                const { data } = await api.post('/auth/journey', formData);
                setAuthState(prev => ({
                    ...prev,
                    user: data
                }));
                setLoadingText("Your freelancer account has been successfully created");
            } catch (error) {
                setSubmitError(error.response?.data?.message || 'An error occurred. Please try again.');
            } finally {
                setTimeout(() => {
                    navigate(AUTH_ROUTES.ADVENTURE);
                    setLoading(false);
                }, 3000);
            }
        }
    };

    const currentYear = new Date().getFullYear();

    if (!authState.isAuthenticated) {
        return <Navigate to={AUTH_ROUTES.REGISTER} replace />;
    }

    const LoadingScreen = () => (
        <div className="d-flex flex-column align-items-center" style={{
            position: "fixed",
            zIndex: 1
        }}>
            <DotLottieReact
                src="https://lottie.host/950b3cac-9df8-4f09-a780-a1fcf0b1422a/fc6SiqktAX.lottie"
                loop={false}
                autoplay={true}
                style={{ width: "350px", height: "350px" }}
            />

            <h4 className="text-center text-nowrap mt-3 success-text">
                {loadingText}
            </h4>
        </div>
    );

    return (
        <div className='d-flex justify-content-center'>
            {loading && (
                <LoadingScreen />
            )}
            {!loading && (
                <div className="card-register">
                    <h4 className="justify-content-center d-flex text-nowrap">
                        Sign up and discover your greatest potential as a freelancer or worker
                    </h4>

                    {submitError && (
                        <div className="alert alert-danger" role="alert">
                            {submitError}
                        </div>
                    )}

                    <form onSubmit={handleSubmit}>
                        <div className="row g-3 justify-content-center">
                            <div className="col-10">
                                {/* Password */}
                                <div className="form-group">
                                    <label htmlFor="inputPassword" className="form-label">Password</label>
                                    <input
                                        type="password"
                                        className="form-control mb-3"
                                        id="inputPassword"
                                        name="password"
                                        style={{ borderRadius: '9px', height: '45px' }}
                                        value={formData.password}
                                        onChange={handleChange}
                                    />
                                    {errors.password && <span className="text-danger mb-3">{errors.password}</span>}
                                </div>

                                {/* Country */}
                                <div className="form-group">
                                    <label htmlFor="inputCountry" className="form-label">Country</label>
                                    <select
                                        className="form-control mb-3"
                                        id="inputCountry"
                                        name="country"
                                        style={{ borderRadius: '9px', height: '45px' }}
                                        value={formData.country}
                                        onChange={handleChange}
                                    >
                                        <option value="">Select Country</option>
                                        {COUNTRIES.map((item) => (
                                            <option key={item.name} value={item.name}>
                                                {item.value}
                                            </option>
                                        ))}
                                    </select>
                                    {errors.country && <span className="text-danger">{errors.country}</span>}
                                </div>

                                {/* Date of Birth */}
                                <div className="row g-3 mb-3">
                                    <div className="col-sm">
                                        <label htmlFor="inputday" className="form-label">Day</label>
                                        <input
                                            type="number"
                                            name="day"
                                            className="form-control"
                                            id="inputday"
                                            style={{ borderRadius: '9px', height: '45px' }}
                                            value={formData.day}
                                            onChange={handleChange}
                                            onKeyPress={(e) => {
                                                const value = e.target.value + e.key;
                                                if (!/[0-9]/.test(e.key) || parseInt(value) < 1 || parseInt(value) > 31) e.preventDefault();
                                            }}
                                        />
                                        {errors.day && <span className="text-danger">{errors.day}</span>}
                                    </div>

                                    <div className="col-sm">
                                        <label htmlFor="inputmonth" className="form-label">Month</label>
                                        <select
                                            id="inputmonth"
                                            className="form-control"
                                            name="month"
                                            style={{ borderRadius: '9px', height: '45px' }}
                                            value={formData.month}
                                            onChange={handleChange}
                                        >
                                            {[...Array(12).keys()].map((i) => {
                                                const value = i + 1;
                                                return (
                                                    <option key={value} value={value}>
                                                        {value < 10 ? `0${value}` : value}
                                                    </option>
                                                );
                                            })}
                                        </select>
                                    </div>

                                    <div className="col-sm">
                                        <label htmlFor="year" className="form-label">Year</label>
                                        <select
                                            id="year"
                                            name="year"
                                            className="form-control"
                                            style={{ borderRadius: '9px', height: '45px' }}
                                            value={formData.year}
                                            onChange={handleChange}
                                        >
                                            {[...Array(currentYear - 1900 + 1).keys()].reverse().map((i) => {
                                                const value = currentYear - i;
                                                return (
                                                    <option key={value} value={value}>
                                                        {value}
                                                    </option>
                                                );
                                            })}
                                        </select>
                                    </div>
                                </div>
                                {errors.dateOfBirth && <span className="text-danger">{errors.dateOfBirth}</span>}

                                {/* Email Opt-in */}
                                <div className="form-check my-1">
                                    <input
                                        className="form-check-input"
                                        type="checkbox"
                                        name="emailsOptIn"
                                        id="emailsOptIn"
                                        checked={formData.emailsOptIn}
                                        onChange={handleChange}
                                    />
                                    <label className="form-check-label" htmlFor="emailsOptIn">
                                        Send me helpful emails to find rewarding work and job leads.
                                    </label>
                                </div>

                                {/* Terms and Conditions */}
                                <div className="form-check mt-1 mb-2">
                                    <input
                                        className="form-check-input"
                                        type="checkbox"
                                        name="termsAccepted"
                                        id="termsAccepted"
                                        checked={formData.termsAccepted}
                                        onChange={handleChange}
                                    />
                                    <label className="form-check-label" htmlFor="termsAccepted">
                                        Yes, I understand and agree to the <span className="text-landing">Clocker Terms of Service</span>,
                                        including the <span className="text-landing">User Agreement</span> and <span className="text-landing">Privacy Policy</span>.
                                    </label>
                                </div>
                            </div>

                            {/* Submit Button */}
                            <div className="col-12 justify-content-center d-flex">
                                <button type="submit" className="btn btn-primary" disabled={loading}>{loading ? 'Creating account...' : 'Create my account'}</button>
                            </div>
                        </div>

                    </form>
                    <div className="d-flex align-items-center my-3">
                        <hr className="flex-grow-1 thick-line" />
                        <span className="mx-2 text-body-2">Already have a Clocker account? <span className="text-landing">Log in</span></span>
                        <hr className="flex-grow-1 thick-line" />
                    </div>
                </div>
            )}
        </div>
    );
};

export default Journey;