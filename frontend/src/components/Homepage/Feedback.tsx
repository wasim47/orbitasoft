import React, { useState, useEffect } from 'react';

interface Feedbacks {
   name: string;
   designation: string;
   rating: number;
   feedback: string;
}

const Feedback: React.FC = () => {

   const [feedbackData, setFeedbackData] = useState<Feedbacks[]>([])
   const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

   useEffect(() => {

      const fetchFeedbackData = async () => {
         const response = await fetch(`${API_BASE_URL}/feedbacks`);
         const result = await response.json()
         setFeedbackData(result.data)
      }

      fetchFeedbackData();
   }, []);

   const generateStars = (rating: number) => {
      const fullStars = Math.floor(rating); // Full stars based on the rating
      const emptyStars = 5 - fullStars; // Remaining stars
  
      // Create an array of stars (filled and empty)
      const stars = [
        ...Array(fullStars).fill(<img src="assets/img/icon/starIcon2.png" alt="icon" />),
        ...Array(emptyStars).fill(<img src="assets/img/icon/starIconRegular.png" alt="icon" />)
      ];
  
      return stars;
    };
   return (

      <section className="testimonial-section space pb-0 fix fadeInUp" data-wow-delay=".5s"
         data-bg-src="assets/img/bg/testimonialBg1_1.png">
         <div className="testimonial-wrap style3 space">
            <div className="container">
               <div className="row">
                  <div className="col-12 d-flex justify-content-center">
                     <div className="section-title title-area mb-50 mx-auto">
                        <div className="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg"
                           alt="icon" /> <span> Testimonials
                           </span><img src="assets/img/icon/arrowRight.svg" alt="icon" /></div>
                        <h2 className="title text-center">Our Latest Client Feedback</h2>
                     </div>
                  </div>
               </div>
               <div className="slider-area">
                  <div className="swiper gt-slider testimonial-slider3" id="testimonialSlider3"
                     data-slider-options='{"loop": true,"centeredSlides":true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                     <div className="swiper-wrapper">


                        {
                           feedbackData.map((feed) => (
                              <div className="swiper-slide">
                                 <div className="testimonial-card style3 img-custom-anim-left fadeInUp" data-wow-delay=".4s">
                                 <ul className="star-wrap">
                                    {generateStars(feed.rating)}
                                 </ul>
                                    <p className="text">{feed.feedback}
                                    </p>
                                    <div className="profile-box">
                                       <div className="testi-thumb">
                                          <img src="assets/img/default-user.webp" alt="thumb" />
                                       </div>
                                       <div className="testi-content">
                                          <h3 className="title">{feed.name}</h3>
                                          <div className="designation">{feed.designation}</div>
                                       </div>
                                    </div>
                                    <div className="quote">
                                       <img className="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon" />
                                       <img className="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon" />
                                    </div>
                                    <div className="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape" />
                                    </div>
                                 </div>
                              </div>
                           ))
                        }

                     </div>
                     <div className="slider-pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   );
};

export default Feedback;
