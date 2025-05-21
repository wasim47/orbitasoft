import React from "react";

const BannerSection: React.FC = () => {
  return (
    <section className="hero-section fix">
      <div className="hero-wrapper style1">
        <div className="shape1_2 d-none d-xxl-block"><img src="assets/img/shape/heroShape1_2.png" alt="shape" /></div>
        <div className="shape1_3">
          <a href="contact.html"> <img className="rotate360" src="assets/img/shape/heroShape1_3.png" alt="shape" /> </a>
        </div>
        <div className="shape1_4 movingX d-none d-xxl-block"><img src="assets/img/shape/heroShape1_4.png" alt="shape" />
        </div>
        <div className="shape1_5  float-bob-y d-none d-xxl-block"><img src="assets/img/shape/heroShape1_5.png" alt="shape" />
        </div>
        <div className="container">
          <div className="hero-main-container style1 border-radius" style={{
            position: 'relative',
            borderRadius: '20px',
            overflow: 'hidden',
          }}>
            <div style={{
              backgroundImage: `url(assets/img/hero/orbitasoft.webp)`,
              backgroundSize: 'cover',
              backgroundPosition: 'center',
              position: 'absolute',
              top: 0,
              left: 0,
              width: '100%',
              height: '100%',
            }}></div>

            <div style={{
              background: 'rgba(0, 0, 0, 0.5)',
              position: 'absolute',
              top: 0,
              left: 0,
              width: '100%',
              height: '100%',
              borderRadius: 'inherit',
            }}></div>

            <div className="container" style={{ position: 'relative', zIndex: 1, }}>
              <div className="row d-flex align-items-center align-items-xl-start">
                <div className="col-xl-8 order-2 order-xl-1">
                  <div className="hero-content style1">
                    <h6 className="subtitle">
                      <img src="assets/img/icon/subtitleIcon1_1.svg" alt="icon" />
                      Everything You Need to Build a Powerful Digital Presence
                    </h6>
                    <h2>
                      <span style={{ fontWeight: 'bold', fontSize: '1.5em' }}>Orbita Soft</span>:<br /> Pioneering Business Innovation with Expert IT Services
                    </h2>


                    <div className="checklist-wrapper style3">
                      <ul className="checklist style3">
                        <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon" /> Deployment and Support
                        </li>
                        <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon" /> Discovery and Analysis
                        </li>
                      </ul>
                      <ul className="checklist style3">
                        <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon" /> Flexibility and
                          Adaptability</li>
                        <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon" /> Competitive Advantage
                        </li>
                      </ul>
                    </div>
                    <div className="contact-meta">
                      <div className="btn-wrapper">
                        <p style={{ color: 'white', marginBottom: '20px'}}>
                          Ready to transform your business? 
                        </p>
                        <a href="contact.html" className="gt-btn style4">Call us now <i
                          className="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                      </div>
                    </div>


                    <div className="fancy-box-wrapper style5  fadeInUp" data-wow-delay=".9s">
                      <div className="fancy-box style5">
                        <div className="title"><img src="assets/img/icon/starIcon1_1.svg" alt="icon" /> Health Care
                        </div>
                        <div className="item-wrap">
                          <div className="item">
                            <img src="assets/img/shape/profileShape1_1.png" alt="shape" />
                          </div>
                          <div className="item">
                            <div className="star-wrapper">
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                            </div>
                            <h6>150+ reviews</h6>
                          </div>
                        </div>
                      </div>
                      <div className="fancy-box style5 border-0">
                        <div className="title"> Ecommerce</div>
                        <div className="item-wrap">
                          <div className="item">
                            <img src="assets/img/shape/profileShape1_1.png" alt="shape" />
                          </div>
                          <div className="item">
                            <div className="star-wrapper">
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                              <img src="assets/img/icon/starIcon1_2.svg" alt="icon" />
                            </div>
                            <h6>50+ reviews</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {/* <div className="col-xl-6 order-1 order-xl-2 justify-content-center">
                  <div className="hero-thumb style1">
                    <div className="main-thumb">
                      <img src="assets/img/hero/orbitasoft.webp" alt="thumb" />
                    </div>

                    <div className="shape1_1 d-none d-xxl-block"><img src="assets/img/shape/heroShape1_1.png"
                      alt="shape" /></div>
                  </div>
                </div> */}
              </div>
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style={{ position: 'absolute' }} >
              <clipPath id="heroMask2">
                <path
                  d="M0 50C0 22.3858 22.3858 0 50 0H1780C1807.61 0 1830 22.3858 1830 50V774C1830 801.614 1807.61 824 1780 824H1042.05C1015.85 824 991.426 810.575 977.326 788.498C947.176 741.292 878.083 741.197 848.055 788.482C834.009 810.601 809.627 824 783.425 824H50C22.3858 824 0 801.614 0 774V50Z"
                  fill="#384BFF" />
              </clipPath>
            </svg>
          </div>
        </div>
      </div>
    </section>
  );
};

export default BannerSection;
