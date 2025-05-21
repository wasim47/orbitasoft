import React from "react";

const Links: React.FC = () => {
  return (
    <div className="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">
                    <h3 className="widget_title">Quick Links</h3>
                    <div className="menu-all-pages-container">
                      <ul className="menu">
                        <li><a href="about.html"><i className="fa-solid fa-chevrons-right"></i>Extech About</a>
                        </li>
                        <li><a href="service.html"><i className="fa-solid fa-chevrons-right"></i>Our Services</a>
                        </li>
                        <li><a href="news.html"><i className="fa-solid fa-chevrons-right"></i>Our
                          Blogs</a>
                        </li>
                        <li><a href="faq.html"><i className="fa-solid fa-chevrons-right"></i>FAQ’S</a></li>
                        <li><a href="contact.html"><i className="fa-solid fa-chevrons-right"></i>Contact Us</a>
                        </li>
                      </ul>
                    </div>
                  </div>
  );
};

export default Links;
