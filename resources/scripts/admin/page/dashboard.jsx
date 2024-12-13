import React, { useState } from 'react';
import Chart from 'react-apexcharts';

const Dashboard = ({ totalUser, totalCompany, totalProject, totalContract }) => {
    const [chartOptions] = useState({
        annotations: {
            position: 'back',
        },
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: 1,
        },
        colors: ['#435ebe'],
        chart: {
            type: 'bar',
            toolbar: { show: false },
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
    });

    const [chartSeries] = useState([
        {
            name: 'sales',
            data: [9, 20, 30, 20, 10, 20, 30, 20, 10, 20, 30, 20],
        },
    ]);

    return (
        <div className="page-heading">
            <h3>Dashboard</h3>
            <div className="page-content">
                <section className="row">
                    <div className="col-12 col-lg-12">
                        <div className="row">
                            {/* Card Users */}
                            <div className="col-9 col-lg-3 col-md-9">
                                <div className="card">
                                    <div className="card-body px-4 py-4-5">
                                        <div className="row">
                                            <div className="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div className="stats-icon green mb-2">
                                                    <i className="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div className="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 className="text-muted font-semibold">Users</h6>
                                                <h6 className="font-extrabold mb-0">{totalUser}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Card Company */}
                            <div className="col-9 col-lg-3 col-md-9">
                                <div className="card">
                                    <div className="card-body px-4 py-4-5">
                                        <div className="row">
                                            <div className="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div className="stats-icon blue mb-2">
                                                    <i className="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div className="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 className="text-muted font-semibold">Company</h6>
                                                <h6 className="font-extrabold mb-0">{totalCompany}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Card Project */}
                            <div className="col-9 col-lg-3 col-md-9">
                                <div className="card">
                                    <div className="card-body px-4 py-4-5">
                                        <div className="row">
                                            <div className="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div className="stats-icon purple mb-2">
                                                    <i className="iconly-boldFolder"></i>
                                                </div>
                                            </div>
                                            <div className="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 className="text-muted font-semibold">Project</h6>
                                                <h6 className="font-extrabold mb-0">{totalProject}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Card Contract */}
                            <div className="col-9 col-lg-3 col-md-9">
                                <div className="card">
                                    <div className="card-body px-4 py-4-5">
                                        <div className="row">
                                            <div className="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div className="stats-icon red mb-2">
                                                    <i className="iconly-boldDocument"></i>
                                                </div>
                                            </div>
                                            <div className="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 className="text-muted font-semibold">Contract</h6>
                                                <h6 className="font-extrabold mb-0">{totalContract}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Profile Visit Chart */}
                        <div className="row">
                            <div className="col-12">
                                <div className="card">
                                    <div className="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div className="card-body">
                                        <Chart options={chartOptions} series={chartSeries} type="bar" height={300} />
                                        {/* <div id="chart-profile-visit"></div> */}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    );
};

export default Dashboard;
