import React from 'react';

const AboutUs: React.FC = () => {
  return (
    <section className="about-section space fix bg-theme-color">
      <div className="about-container-wrapper style1">
        <div className="shape1"><img src="assets/img/shape/aboutShape1_1.png" alt="shape" /></div>
        <div className="shape2"><img src="assets/img/shape/aboutShape1_2.png" alt="shape" /></div>
        <div className="shape3"><img src="assets/img/shape/aboutShape1_3.png" alt="shape" /></div>
        <div className="container">
          <div className="row gy-5 gx-70">
            <div className="col-xl-6">
              <div className="about-thumb">
                <div className="thumb1">
                  <img className="img-custom-anim-left fadeInUp" data-wow-delay=".5s"
                    src="assets/img/about/aboutThumb1_1.png" alt="thumb" />


                  <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style={{ position: 'absolute' }}>
                    <clipPath id="aboutThumbdMask1">
                      <path
                        d="M0 20C0 8.95431 8.9543 0 20 0H395.5C423.114 0 445.5 22.3858 445.5 50V72.5C445.5 100.114 467.886 122.5 495.5 122.5H520C547.614 122.5 570 144.886 570 172.5V321.5L562.197 537.223C561.808 547.98 552.975 556.5 542.21 556.5H20C8.95432 556.5 0 547.546 0 536.5V20Z" />
                    </clipPath>
                  </svg>
                </div>
                <div className="thumb2">
                  <img className="img-custom-anim-top fadeInUp" data-wow-delay=".8s"
                    src="assets/img/about/orbita-soft-rich-square.png" alt="thumb" />
                </div>

                <div className="shape"><a href="contact.html"><img className="rotate360"
                  src="assets/img/shape/aboutShape1_4.png" alt="shape" /></a></div>
              </div>
            </div>
            <div className="col-xl-6">
              <div className="about-content">
                <div className="section-title mxw-560">
                  <div className="subtitle text-white fadeInUp" data-wow-delay=".3s"> <img
                    src="assets/img/icon/arrowLeftWhite.svg" alt="icon" /> <span className="text-white"> about
                      company
                    </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon" /></div>
                  <h2 className="title text-white fadeInUp" data-wow-delay=".6s">Navigating Tech Horizons Together
                  </h2>
                  <p className="mt-25 text-white fadeInUp" data-wow-delay=".5s">There are many variations of
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                    injected humour, or randomised words which don't look even slightly believable. If you</p>
                </div>
                <div className="fancy-box-wrapper style2">
                  <div className="fancy-box style2 fadeInUp" data-wow-delay=".3s">
                    <div className="item">
                      <div className="icon"><img src="assets/img/icon/aboutIcon1_1.svg" alt="icon" /></div>
                    </div>
                    <div className="item">
                      <h6>Back-End Development</h6>
                    </div>
                  </div>
                  <div className="fancy-box style2 fadeInUp" data-wow-delay=".5s">
                    <div className="item">
                      <div className="icon"><img src="assets/img/icon/aboutIcon1_1.svg" alt="icon" /></div>
                    </div>
                    <div className="item">
                      <h6>Product Design</h6>
                    </div>
                  </div>
                </div>
                <div className="counter-box-wrapper style1">
                  <div className="counter-box style1 fadeInUp" data-wow-delay=".3s">
                    <h3>
                      <span className="counter-number">20.5</span> k
                    </h3>
                    <h6>Projects Done</h6>
                  </div>
                  <div className="counter-box style1 fadeInUp" data-wow-delay=".5s">
                    <h3>
                      <span className="counter-number">100.5</span> k
                    </h3>
                    <h6>Happy Clients</h6>
                  </div>
                  <div className="counter-box style1 fadeInUp" data-wow-delay=".8s">
                    <h3>
                      <span className="counter-number">150.5</span> k
                    </h3>
                    <h6>Team Members</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutUs;
