import React from "react";

import Logo from "./Logo";
import NavLinks from "./NavLinks";
import NavRight from "./NavRight";
import Placeholder from "./Placeholder";
import MobileMenu from "./MobileMenu";


const Header: React.FC = () => {
  return (
    <>
      <Placeholder />
      <MobileMenu />
      <header>
        <div id="header-sticky" className="header-1">
          <div className="container">
            <div className="mega-menu-wrapper">
              <div className="header-main style-2">
                <div className="header-left">
                  <Logo />
                </div>
                <NavLinks />
                <NavRight />
              </div>
            </div>
          </div>
        </div>
      </header>
      <div className="search-wrap">
        <div className="search-inner">
          <i className="fas fa-times search-close" id="search-close"></i>
          <div className="search-cell">
            <form method="get">
              <div className="search-field-holder">
                <input type="search" className="main-search-input" placeholder="Search..."/>
              </div>
            </form>
          </div>
        </div>
      </div>

    </>
  );
};

export default Header;
