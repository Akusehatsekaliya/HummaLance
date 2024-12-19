import React, { useState, useEffect, useContext } from 'react';
import { AuthContext } from '@context/AuthContext';
import API from '@components/apiAxios';
import { useNavigate } from 'react-router-dom';

const Journey = () => {
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
                const response = await API.post('/auth/journey', formData, {
                    headers: { Authorization: `Bearer ${token}` },
                });
                setAuthState((prevState) => ({
                    ...prevState,
                    user: response.data,
                }));
                navigate("/react/auth/adventure");
                // console.log('Form submitted successfully:', response.data);
            } catch (error) {
                console.error('Error submitting form:', error);
            }
        }
    };

    const currentYear = new Date().getFullYear();

    return (
        <div className='d-flex justify-content-center'>
            <div className="card-register">
                <h4 id="signup-heading" className="justify-content-center d-flex text-nowrap">
                    Sign up and discover your greatest potential as a freelancer or worker
                </h4>

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
                                    {countries.map((item) => (
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
                            <button type="submit" className="btn btn-primary">Create my account</button>
                        </div>
                    </div>
                </form>

                {/* Login Link */}
                <div className="d-flex align-items-center my-3">
                    <hr className="flex-grow-1 thick-line" />
                    <span className="mx-2 text-body-2">Already have a Clocker account? <span className="text-landing">Log in</span></span>
                    <hr className="flex-grow-1 thick-line" />
                </div>
            </div>
        </div>
    );
};

export default Journey;
