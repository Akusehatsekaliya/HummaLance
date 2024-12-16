import React, { useState, useEffect } from 'react';
import API from '../components/apiAxios';

const Register = () => {
    const [totalUser, setTotalUser] = useState(0);
    const [totalCompany, setTotalCompany] = useState(0);
    const [totalProject, setTotalProject] = useState(0);
    const [totalContract, setTotalContract] = useState(0);

    useEffect(() => {
        fetchData();
    }, []);

    const fetchData = async () => {
        try {
            const [totalUserResponse, totalProjectResponse, totalContractResponse] = await Promise.all([
                API.get("/total/user"),
                API.get("/total/project"),
                API.get("/total/contract"),
            ]);

            setTotalUser(totalUserResponse.data);
            setTotalProject(totalProjectResponse.data);
            setTotalContract(totalContractResponse.data);
        } catch (error) {
            console.error('Error fetching banners:', error);
        }
    }

    return (
        <div className="col-lg-7">
            <div className="card-register">
                <h4 id="signup-heading" className="justify-content-center d-flex">Sign up to start your freelance career</h4>
                <div id="header" className="header">
                    <div className="justify-content-between d-flex mt-5 gap-5">
                        <button className="linkedin-register">
                            <img src="/assets/svg/icons/mdi_linkedin.svg" alt="" />
                            Continue With Linkedin
                        </button>
                        <a className="google-register" href="/api/login/google">
                            <img src="/assets/images/c0ab57ca036251e04177a7fc61040073.jfif" alt=""
                                className="profile-icon" />
                            <div className="text-area">
                                <span>Continue As Ahmad Rifaldi</span>
                                <span>ahmadrifaldikurniawan@gmail.com</span>
                            </div>
                            <img src="/assets/svg/icons/flat-color-icons_google.svg" alt=""
                                className="btn-icon" />
                        </a>
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
