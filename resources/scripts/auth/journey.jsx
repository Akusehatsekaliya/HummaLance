import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
// import { useAuth } from '/resources/scripts/auth';
import API from '../components/apiAxios';

const Journey = () => {
    const [formData, setFormData] = useState({
        password: '',
        country: '',
        day: '',
        month: '',
        year: '',
        emailsOptIn: false,
        termsAccepted: false,
    });

    const [errors, setErrors] = useState({});

    // useEffect(() => {
    //     if (!isAuthenticated) {
    //         navigate("/react/auth/register");
    //     }
    // }, [isAuthenticated, navigate]);

    const countries = [
        { name: 'US', value: 'United States' },
        { name: 'IN', value: 'India' },
        { name: 'GB', value: 'United Kingdom' },
        // Add other countries as needed
    ];

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setFormData({
            ...formData,
            [name]: type === 'checkbox' ? checked : value,
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        // Validate form
        const newErrors = {};

        // Validate password
        if (!formData.password) {
            newErrors.password = 'Password is required';
        }

        // Validate country
        if (!formData.country) {
            newErrors.country = 'Country is required';
        }

        // Validate day, month, and year
        if (!formData.day || !formData.month || !formData.year) {
            newErrors.dateOfBirth = 'Please select a valid date of birth';
        }

        // Validate terms and conditions
        if (!formData.termsAccepted) {
            newErrors.termsAccepted = 'You must agree to the terms and conditions';
        }

        setErrors(newErrors);

        // Submit if no errors
        if (Object.keys(newErrors).length === 0) {
            // Handle form submission, e.g., send data to server
            console.log(formData);
        }
    };

    const currentYear = new Date().getFullYear();

    const handleFormSubmit = async (event) => {
        event.preventDefault();
        const formData = new FormData(event.target);
        try {
            await API.post('/auth/journey', formData);
            setShowAddModal(false);
            fetchData();
        } catch (error) {
            console.error('Error adding data:', error);
        }
    };
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
                                    defaultValue={formData.password}
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
                                    defaultValue={formData.country}
                                    onChange={handleChange}
                                >
                                    {countries.map((item) => (
                                        <option key={item.name} defaultValue={item.name}>
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
                                        defaultValue={formData.day}
                                        onChange={handleChange}
                                    />
                                </div>

                                <div className="col-sm">
                                    <label htmlFor="inputmonth" className="form-label">Month</label>
                                    <select
                                        id="inputmonth"
                                        className="form-control"
                                        name="month"
                                        style={{ borderRadius: '9px', height: '45px' }}
                                        defaultValue={formData.month}
                                        onChange={handleChange}
                                    >
                                        {[...Array(12).keys()].map((i) => {
                                            const value = i + 1;
                                            return (
                                                <option key={value} defaultValue={value}>
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
                                        defaultValue={formData.year}
                                        onChange={handleChange}
                                    >
                                        {[...Array(currentYear - 1900 + 1).keys()].reverse().map((i) => {
                                            const value = currentYear - i;
                                            return (
                                                <option key={value} defaultValue={value}>
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
                                    id="flexCheckDefault"
                                    checked={formData.emailsOptIn}
                                    onChange={handleChange}
                                />
                                <label className="form-check-label" htmlFor="flexCheckDefault">
                                    Send me helpful emails to find rewarding work and job leads.
                                </label>
                            </div>

                            {/* Terms and Conditions */}
                            <div className="form-check mt-1 mb-2">
                                <input
                                    className="form-check-input"
                                    type="checkbox"
                                    name="termsAccepted"
                                    id="flexCheckDefault"
                                    checked={formData.termsAccepted}
                                    onChange={handleChange}
                                />
                                <label className="form-check-label" htmlFor="flexCheckDefault">
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
