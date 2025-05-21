import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

// Import CSS files
import "./assets/img/favicon.svg";
import "./assets/css/bootstrap.min.css";
import "./assets/css/all.min.css";
import "./assets/css/animate.css";
import "./assets/css/magnific-popup.css";
import "./assets/css/meanmenu.css";
import "./assets/css/swiper-bundle.min.css";
import "./assets/css/nice-select.css";
import "./assets/css/main.css";

import Header from './components/Include/Header/Header';
import Home from './pages/Home';
import Footer from './components/Include/Footer/Footer';
import Article from './pages/Article';
import Portfolio from './components/Homepage/Portfolio';
import Pricing from './components/Homepage/Pricing';
import Service from './components/Homepage/Service';
import ServiceDetails from './components/Homepage/ServiceDetails';

const App: React.FC = () => {
  return (
    <Router>
      <div id="scroll-container">
        <Header />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/portfolio" element={<Portfolio />} />
          <Route path="/pricing-package" element={<Pricing />} />
          <Route path="/services" element={<Service />} />
          <Route path="/services/:slug" element={<Service />} />
          <Route path="/service/:slug" element={<ServiceDetails />} />

          <Route path="/:slug" element={<Article />} />
          <Route path="/:slug/:sslug" element={<Article />} />
          <Route path="/:slug/:sslug/:ssslug" element={<Article />} />
        </Routes>
        <Footer />
      </div>
    </Router>
  );
};

export default App;
