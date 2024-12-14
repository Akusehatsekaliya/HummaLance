import React, { useEffect, useState, useRef } from 'react';
import Modal from 'react-bootstrap/Modal';
import DataTable from 'datatables.net-react';
import DT from 'datatables.net-bs5';
import API from '../../components/apiAxios'; // Adjust the import path as necessary

DataTable.use(DT);

const User = () => {
    const tableRef = useRef(null);
    const [user, setUser] = useState([]);
    const [showDetailModal, setShowDetailModal] = useState(false);
    const [showDeleteModal, setShowDeleteModal] = useState(false);
    const [currentUser, setCurrentUser] = useState(null);
    const [roleFilter, setRoleFilter] = useState('');

    const columns = [
        { data: 'DT_RowIndex' },
        { data: 'first_name' },
        { data: 'email' },
        { data: 'role' },
        { data: 'status' },
        { data: null },
    ];

    const options = {
        layout: {
            topStart: null
        }
    };

    useEffect(() => {
        fetchUser();
    }, [roleFilter]);

    const fetchUser = async () => {
        try {
            const { data } = await API.get('/user', { params: { role: roleFilter } });
            setUser(data.data);
        } catch (error) {
            console.error('Error fetching user:', error);
        }
    };

    const handleDeleteUser = async () => {
        try {
            await API.delete(`/user/${currentUser.id}`);
            setShowDeleteModal(false);
            fetchUser();
        } catch (error) {
            console.error('Error deleting user:', error);
        }
    };

    const handleShowDetail = async (userId) => {
        try {
            const { data } = await API.get(`/user/showDetail/${userId}`);
            setCurrentUser(data.data);
            setShowDetailModal(true);
        } catch (error) {
            console.error('Error fetching user details:', error);
        }
    };

    return (
        <div className="page-heading">
            <h3>User</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio.</p>
            <div className="page-content">
                <section className="section">
                    <div className="card">
                        <div className="card-body">
                            <div className="row mb-3">
                                <div className="col-md-3">
                                    <select
                                        id="roleFilter"
                                        className="form-select"
                                        value={roleFilter}
                                        onChange={(e) => setRoleFilter(e.target.value)}
                                    >
                                        <option value="">All Roles</option>
                                        <option value="client">Client</option>
                                        <option value="freelancer">Freelancer</option>
                                    </select>
                                </div>
                            </div>
                            <div className="table-responsive">
                                <DataTable
                                    data={user}
                                    columns={columns}
                                    options={options}
                                    className="table"
                                    slots={{
                                        5: (data, row) => (
                                            <div>
                                                <button
                                                    className="btn text-primary"
                                                    onClick={() => handleShowDetail(row.id)}
                                                >
                                                    <i className="bi bi-info-circle-fill"></i>
                                                </button>
                                                <button
                                                    className="btn text-danger"
                                                    onClick={() => {
                                                        setCurrentUser(row);
                                                        setShowDeleteModal(true);
                                                    }}
                                                >
                                                    <i className="bi bi-trash3-fill"></i>
                                                </button>
                                            </div>
                                        )
                                    }}
                                />
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            {/* Detail Modal */}
            <Modal show={showDetailModal} onHide={() => setShowDetailModal(false)}>
                <Modal.Header closeButton>
                    <Modal.Title>User Details</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    {currentUser && (
                        <div>
                            <h5>{currentUser.first_name} {currentUser.last_name}</h5>
                            <p>Email: {currentUser.email}</p>
                            <p>Phone: {currentUser.phone}</p>
                            <p>Address: {currentUser.address}</p>
                            <p>Role: {currentUser.role}</p>
                            <p>Status: {currentUser.status}</p>
                            {/* Add more user details as needed */}
                        </div>
                    )}
                </Modal.Body>
                <Modal.Footer>
                    <button type="button" className="btn btn-secondary" onClick={() => setShowDetailModal(false)}>Close</button>
                </Modal.Footer>
            </Modal>

            {/* Delete Confirmation Modal */}
            <Modal show={showDeleteModal} onHide={() => setShowDeleteModal(false)}>
                <Modal.Header closeButton>
                    <Modal.Title>Delete Confirmation</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <p>Are you sure you want to delete this user? This action cannot be undone.</p>
                </Modal.Body>
                <Modal.Footer>
                    <button type="button" className="btn btn-secondary" onClick={() => setShowDeleteModal(false)}>Cancel</button>
                    <button type="button" className="btn btn-danger" onClick={handleDeleteUser}>Delete</button>
                </Modal.Footer>
            </Modal>
        </div>
    );
};

export default User;