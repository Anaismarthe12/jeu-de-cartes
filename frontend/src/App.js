import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import { AuthProvider } from './AuthContext';
import HomePage from './pages/HomePage';
import LoginPage from './pages/LoginPage';
import RegisterPage from './pages/RegisterPage';
import GamePage from './pages/GamePage';
<<<<<<< HEAD
import ReglesPage from './pages/ReglesPage';
import GuidePage from './pages/GuidePage';
=======
>>>>>>> origin/main
import './App.css';

function App() {
  return (
    <AuthProvider>
      <Router>
        <Routes>
          <Route path="/" element={<HomePage />} />
          <Route path="/login" element={<LoginPage />} />
          <Route path="/register" element={<RegisterPage />} />
          <Route path="/game" element={<GamePage />} />
<<<<<<< HEAD
          <Route path="/Regles" element={<ReglesPage />} />
          <Route path="/Guide" element={<GuidePage />} />
=======
>>>>>>> origin/main
        </Routes>
      </Router>
    </AuthProvider>
  );
}

export default App;