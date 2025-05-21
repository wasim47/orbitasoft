import React from "react";
import About from "./About";
import Links from "./Links";
import Newsletter from "./Newsletter";
import CopyRight from "./CopyRight";

const Footer: React.FC = () => {

  return (
    <>
      <footer className="footer-area">
        <div className="widget-area style1  pt-100 pb-80">
          <div className="container">
            <div className="footer-layout style1">
              <div className="row">
                <div className="col-xl-3 col-md-6 col-12">                  
                    <About/>
                </div>
                <div className="col-xl-2 col-md-6 col-12">
                  <Links/>
                </div>
                
                <div className="col-xl-3 col-md-6 col-12">
                  <Newsletter/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <CopyRight/>
      </footer>
    </>
  );
};

export default Footer;
