import React from 'react';
import BannerSection from '../components/Homepage/BannerSection';
import Partners from '../components/Homepage/Partners';
import Service from '../components/Homepage/Service';
import AboutUs from '../components/Homepage/AboutUs';
import Portfolio from '../components/Homepage/Portfolio';
// import Video from '../components/Homepage/Video';
import DevelopmentProcess from '../components/Homepage/DevelopmentProcess';
import Pricing from '../components/Homepage/Pricing';
// import Team from '../components/Homepage/Team';
import FAQ from '../components/Homepage/FAQ';
import ContactUs from '../components/Homepage/ContactUs';
import Feedback from '../components/Homepage/Feedback';
// import Blog from '../components/Homepage/Blog';

const Home: React.FC = () => {
  return (
    <>
      <BannerSection />
      <Partners />
      <Service />
      <AboutUs />
      <Portfolio />
      {/* <Video /> */}
      <DevelopmentProcess />
      <Pricing />
      {/* <Team /> */}
      <FAQ />
      <ContactUs />
      <Feedback />
      {/* <Blog /> */}
    </>
  );
};

export default Home;
