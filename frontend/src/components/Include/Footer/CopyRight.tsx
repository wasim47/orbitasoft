import React from "react";

const CopyRight: React.FC = () => {
  return (
    <>
      <div className="copyright-wrap bg-theme">
          <div className="container">
            <div className="copyright-layout">
              <div className="layout-text wow fadeInUp" data-wow-delay=".3s">
                <p className="copyright">
                  <i className="fal fa-copyright"></i> All Copyright 2024 by <a href="index-2.html">Orbita Soft</a>
                </p>
              </div>
              <div className="layout-link wow fadeInUp" data-wow-delay=".6s">
                <div className="link-wrapper">
                  <a href="contact.html">Terms &amp; Condition </a>
                  <a href="contact.html">Privacy Policy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </>
  );
};

export default CopyRight;
