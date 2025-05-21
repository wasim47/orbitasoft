// src/components/Homepage/CourseSection.tsx
import React from 'react';

const DevelopmentProcess: React.FC = () => {
   return (
      <>
         <section className="pricing-section fix pt-5">
            <div className="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"/>
            <h2 className="title text-center mb-5">We are working with SDLC</h2>
            
            </div>
            <div className="col-12 text-center mb-4">
                        <img src="assets/img/sdlc.jpg" alt="SDLC Process" className="img-fluid rounded shadow" />
                     </div>

            </section>
         <section className="work-process-section bg-theme-color2 fix">
            <div className="work-process-wrapper style1 pt-5">
               <div className="container">
                  <div className="row gy-5 align-items-center">
                     
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4 rounded" data-wow-delay=".2s">
                           <div className="number text-white">01</div>
                           <h3 className="title mt-3">Requirement Analysis</h3>
                           <p className="text">Gather all necessary information from stakeholders to understand the project requirements.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 active fadeInUp shadow-sm p-4 rounded" data-wow-delay=".4s">
                           <div className="number text-white">02</div>
                           <h3 className="title mt-3">UI/UX Design</h3>
                           <p className="text">Design user interfaces and experiences that meet the project’s requirements through wireframing and prototyping.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4 rounded" data-wow-delay=".6s">
                           <div className="number text-white">03</div>
                           <h3 className="title mt-3">System Design</h3>
                           <p className="text">Create a blueprint for the system, defining architecture, components, and data flow.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4 rounded" data-wow-delay=".8s">
                           <div className="number text-white">04</div>
                           <h3 className="title mt-3">Development</h3>
                           <p className="text">Build the system according to the design specifications, including coding and integration.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4" data-wow-delay="1s">
                           <div className="number text-white">05</div>
                           <h3 className="title mt-3">Testing</h3>
                           <p className="text">Ensure the system functions correctly and meets all requirements through various testing methods.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4" data-wow-delay="1.2s">
                           <div className="number text-white">06</div>
                           <h3 className="title mt-3">Deployment</h3>
                           <p className="text">Deploy the system in the production environment, ensuring a smooth transition to live use.</p>
                        </div>
                     </div>
                     <div className="col-xl-3">
                        <div className="work-process-card style1 fadeInUp shadow-sm p-4 rounded" data-wow-delay="1.4s">
                           <div className="number text-white">07</div>
                           <h3 className="title mt-3">Maintenance</h3>
                           <p className="text">Provide ongoing support, updates, and optimizations to ensure the system continues to perform well.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </>
   );
};

export default DevelopmentProcess;
