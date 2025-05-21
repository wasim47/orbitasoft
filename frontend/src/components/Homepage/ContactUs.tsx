import React from 'react';

const ContactUs: React.FC = () => {
  return (
    <section className="cta-section space pb-0">
   <div className="container">
      <div className="cta-wrap style1 fix">
         <div className="shape"><img src="assets/img/shape/ctaShape1_1.png" alt="shape"/></div>
         <div className="row gy-5">
            <div className="col-xl-3">
               <div className="cta-thumb img-custom-anim-left fadeInUp" data-wow-delay=".4s">
                  <img src="assets/img/cta/ctaThumb1_1.png" alt="thumb"/>
               </div>
            </div>
            <div className="col-xl-6 d-flex align-items-center">
               <div className="section-title">
                  <div className="subtitle"> <img src="assets/img/icon/arrowLeftWhite.svg" alt="icon"/> <span
                        className="text-white"> Contact US
                     </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"/></div>
                  <h2 className="title">24/7 Expert Hosting Support Our Customers Love</h2>
               </div>
            </div>
            <div className="col-xl-3 d-flex align-items-center">
               <div className="btn-wrapper">
                  <a className="gt-btn style5" href="contact.html">Talk to a Specialist<i
                        className="fa-sharp fa-regular fa-arrow-right-long"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
  );
};

export default ContactUs;
