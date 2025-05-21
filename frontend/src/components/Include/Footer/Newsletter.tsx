import React from "react";

const Newsletter: React.FC = () => {
  return (
    <div className="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">
                    <h3 className="widget_title">Contact Us</h3>
                    <div className="checklist style2">
                      <ul className="ps-0">
                        <li className="text-white"><i className="fa-solid fa-envelope"></i></li>
                        <li className="text-white">info@example.com</li>
                      </ul>
                      <ul className="ps-0">
                        <li className="text-white"><i className="fa-solid fa-phone"></i></li>
                        <li className="text-white">+208-6666-0112</li>
                      </ul>
                      <div className="email-input-container">
                        <input type="email" id="email" placeholder="Your email address" />
                        <button type="submit" id="submitButton"><i
                          className="fa-regular fa-arrow-right-long"></i></button>
                      </div>
                      <form id="termsForm">
                        <label className="custom-checkbox">
                          <input type="checkbox" name="agree" id="agreeCheckbox" />
                          <span className="checkmark"></span>
                          I agree to the <a className="text-underline" href="contact.html" target="_blank">Privacy
                            Policy.</a>
                        </label>
                        <br />
                      </form>
                    </div>
                  </div>
  );
};

export default Newsletter;
