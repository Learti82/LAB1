import React from 'react';
import { Link } from 'react-router-dom';

function Dashboard() {
    return (
        <div className="min-h-screen bg-gray-100 flex items-center justify-center">
            <div className="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 className="text-2xl font-bold mb-4">Dashboard</h1>
                <nav>
                    <ul className="space-y-2">
                        <li>
                            <Link to="/" className="text-blue-500">Home</Link>
                        </li>
                        <li>
                            <Link to="/about" className="text-blue-500">About</Link>
                        </li>
                        <li>
                            <Link to="/login" className="text-blue-500">Login</Link>
                        </li>
                        <li>
                            <Link to="/register" className="text-blue-500">Register</Link>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    );
}

export default Dashboard;
