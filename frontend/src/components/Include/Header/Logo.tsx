import React from "react";

const Logo: React.FC = () => {
  return (
    <div className="logo" style={{width: '250px' }}>
      <a href="/" className="header-logo">
        <img src="/assets/img/orbita_logo.png" alt="logo-img" />
      </a>
    </div>
  );
};

export default Logo;
