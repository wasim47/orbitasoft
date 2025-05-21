import React from "react";

const About: React.FC = () => {
  return (
    <div className="widget footer-widget wow fadeInUp" data-wow-delay=".6s">
      <div className="gt-widget-about">
        <div className="about-logo">
          <a href="index-2.html"><img src="assets/img/footer-logo.svg" alt="extech" /></a>
        </div>
        <p className="about-text"> Extexh IT is a Phasellus ultricies aliquam volutpat ullamcorper
          laoreet neque, a lacinia curabitur lacinia mollis
        </p>
        <div className="gt-social style2">
          <a href="https://www.facebook.com/"><i className="fab fa-facebook-f"></i></a>
          <a href="https://www.twitter.com/"><i className="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i className="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/"><i className="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  );
};

export default About;
