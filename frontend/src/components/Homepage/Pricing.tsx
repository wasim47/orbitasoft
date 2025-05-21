import React, { useState, useEffect } from 'react';

interface PackageCategory {
   id: number;
   name: string;
   packages: Package[];
}

interface Package {
   id: number;
   package_name: string;
   price: string;
   currency: string;
   features: string;
   duration: string;
}

const Pricing: React.FC = () => {

   const [pacakgeData, setPackageData] = useState<PackageCategory[]>([])
   const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

   useEffect(() => {

      const fetchPacakgeData = async () => {
         const response = await fetch(`${API_BASE_URL}/packages`);
         const result = await response.json()
         setPackageData(result.data)
      }

      fetchPacakgeData();
   }, [])

   return (
      <div>
         <div className="breadcrumb-wrapper bg-cover" style={{ backgroundImage: "url('assets/img/breadcrumb.jpg')" }}>
            <div className="border-shape">
               <img src="assets/img/element.png" alt="shape-img"/>
            </div>
            <div className="line-shape">
               <img src="assets/img/line-element.png" alt="shape-img"/>
            </div>
            <div className="container">
               <div className="page-heading">
                  <h1 className="wow fadeInUp" data-wow-delay=".3s">Pricing</h1>
                  <ul className="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                     <li>
                        <a href="/">
                           Home
                        </a>
                     </li>
                     <li>
                        <i className="fas fa-chevron-right"></i>
                     </li>
                     <li>
                        Pricing
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <section className="pricing-section fix section-padding">
            <div className="pricing-wrapper style1">
               <div className="shape1 d-none d-xxl-block"><img src="assets/img/shape/pricingShape1_1.png" alt="shape" /></div>
               <div className="shape2 d-none d-xxl-block"><img src="assets/img/shape/pricingShape1_2.png" alt="shape" /></div>
               <div className="container">
                  <div className="section-title title-area  mx-auto mb-25">
                     <div className="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg" alt="icon" />
                        <span> Our Pricing
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon" />
                     </div>
                     <h2 className="title text-center">Our Awesome Pricing Plans</h2>

                     <div className="tab-section d-flex justify-content-center align-items-center">
                        <ul className="nav nav-pills mb-3" id="pills-tab" role="tablist">

                           {
                              pacakgeData.map((pack, index) => (
                                 <li className="nav-item" role="presentation" key={pack.id}>
                                    <button
                                       className={`nav-link ${index === 0 ? 'active' : ''}`}
                                       id={`pills-${pack.id}-tab`}
                                       data-bs-toggle="pill"
                                       data-bs-target={`#pills-${pack.id}`}
                                       type="button"
                                       role="tab"
                                       aria-controls={`pills-${pack.id}`}
                                       aria-selected={index === 0 ? 'true' : 'false'}
                                    >
                                       {pack.name}
                                    </button>
                                 </li>

                              ))
                           }

                        </ul>
                     </div>
                  </div>

                  <div className="tab-content" id="pills-tabContent">
                     {
                        pacakgeData.map((packData, index) => (
                           <div
                              className={`tab-pane fade ${index === 0 ? 'active show' : ''}`}
                              id={`pills-${packData.id}`}
                              role="tabpanel"
                              aria-labelledby={`pills-${packData.id}-tab`}
                              key={packData.id}
                           >
                              <div className="row gy-5">
                                 {packData.packages.map((pkg) => (
                                    <div className="col-xl-4 col-md-6">
                                       <div className="pricing-card style1">
                                          <div className="pricing-card_header">
                                             <div className="item">
                                                <h4>{pkg.package_name}</h4>
                                                <div className="price">
                                                   <h2>{pkg.currency + +pkg.price}</h2> <span>/ {pkg.duration}</span>
                                                </div>
                                             </div>
                                             <div className="item">
                                                <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon" />
                                             </div>
                                          </div>
                                          <div className="pricing-card_body">
                                             <div className="checklist-wrapper">
                                                <div className="checklist style1" dangerouslySetInnerHTML={{ __html: pkg.features }}></div>
                                             </div>
                                             <div className="btn-wrapper">
                                                <a href="pricing.html" className="gt-btn style2 w-100">Get Started Now <i
                                                   className="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 ))}
                              </div>
                           </div>
                        ))
                     }
                  </div>
               </div>
            </div>
         </section>

      </div>
   );
};

export default Pricing;
