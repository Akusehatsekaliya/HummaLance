import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import axios from 'axios';

const App = () => {
    const [contracts, setContracts] = useState([]);
    const [formData, setFormData] = useState({ title: '', content: '' });

    useEffect(() => {
        fetchContracts();
    }, []);

    const fetchContracts = async () => {
        const { data } = await axios.get('/api/contracts');
        setContracts(data);
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        await axios.post('/api/contracts', formData);
        fetchContracts();
        setFormData({ title: '', content: '' });
    };

    const handleDelete = async (id) => {
        await axios.delete(`/api/contracts/${id}`);
        fetchContracts();
    };

    return (
        <div style={{ padding: '20px' }}>
            <h1>Laravel React CRUD</h1>
            <form onSubmit={handleSubmit}>
                <input
                    type="text"
                    placeholder="Title"
                    value={formData.title}
                    onChange={(e) => setFormData({ ...formData, title: e.target.value })}
                    required
                />
                <textarea
                    placeholder="Content"
                    value={formData.content}
                    onChange={(e) => setFormData({ ...formData, content: e.target.value })}
                    required
                ></textarea>
                <button type="submit">Add Post</button>
            </form>
            <ul>
                {/* {contracts.map((post) => (
                    <li key={post.id}>
                        <h2>{post.title}</h2>
                        <p>{post.content}</p>
                        <button onClick={() => handleDelete(post.id)}>Delete</button>
                    </li>
                ))} */}
            </ul>
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
