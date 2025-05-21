import React, { useState, useEffect } from 'react';

interface Faqs {
   topic: string;
   question: string;
   answer: string;
}
const FAQ: React.FC = () => {

   const [faqData, setFaqData] = useState<Faqs[]>([])
   const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;
   
   useEffect(() => {

      const fetchFaqData = async () => {
         const response = await fetch(`${API_BASE_URL}/faqs`);
         const result = await response.json()
         setFaqData(result.data)
      }

      fetchFaqData();
   }, [])

   return (

      <section className="faq-section space pb-0 fix">
         <div className="container">
            <div className="faq-wrapper style1">
               <div className="row gy-5">
                  <div className="col-xl-6">
                     <div className="faq-thumb">
                        <img className="thumb1 img-custom-anim-top fadeInUp" data-wow-delay=".4s"
                           src="assets/img/faq/faq.webp" alt="thumb" />
                     </div>
                  </div>
                  <div className="col-xl-6">
                     <div className="section-title mxw-560">
                        <div className="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon" /> <span> Faq
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon" /></div>
                        <h2 className="title">Prioritize Your Site’s Safety and Security</h2>
                     </div>
                     <div className="faq-content style1">
                        <div className="faq-accordion">
                           <div className="accordion" id="accordion">
                              
                           {
                           faqData.map((faq, index) => (
                              <div className="accordion-item fadeInUp" data-wow-delay=".5s">
                                 <h5 className="accordion-header">
                                    <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target={`#faq${index}`} aria-expanded="false" aria-controls={`faq${index}`}>
                                       {faq.question}
                                    </button>
                                 </h5>
                                 <div id={`faq${index}`} className="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div className="accordion-body">
                                       {faq.answer}
                                    </div>
                                 </div>
                              </div>
                              ))
                           }
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   );
};

export default FAQ;
