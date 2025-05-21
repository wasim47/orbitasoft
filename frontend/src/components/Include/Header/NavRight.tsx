import React from "react";

const NavRight: React.FC = () => {
  return (
    <>
      <div className="header-right d-flex justify-content-end align-items-center">
        <a href="#0" className="search-trigger search-icon"><i className="fal fa-search"></i></a>
        <a href="#0"><i className="fa-solid fa-phone"></i></a>
        <div className="header-button ms-4">
          <a href="contact.html" className="gt-btn">
            <span>
              get A Quote
              <i className="fa-solid fa-arrow-right-long"></i>
            </span>
          </a>
        </div>
        <div className="header__hamburger d-block d-xl-none my-auto">
          <div className="sidebar__toggle">
            <i className="fas fa-bars"></i>
          </div>
        </div>
      </div>
    </>
  );
};

export default NavRight;
