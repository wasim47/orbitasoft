import React, { useState, useEffect } from 'react';

interface Services {
  name: string;
  details: string;
  url: string;
  image: string;
}

const Portfolio: React.FC = () => {
  const [activeTab, setActiveTab] = useState(0);
  const [portfolioData, setData] = useState<Services[]>([]);
  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

  const truncateString = (str: string, length: number) => {
    return str.length > length ? str.substring(0, length) + '...' : str;
  };

  useEffect(() => {
    const fetchService = async () => {
      const response = await fetch(`${API_BASE_URL}/portfolio`);
      const output = await response.json();
      setData(output.data);
    };

    fetchService();
  }, []);

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
                  <h1 className="wow fadeInUp" data-wow-delay=".3s">Portfolio</h1>
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
                        Portfolio
                     </li>
                  </ul>
               </div>
            </div>
         </div>

      <div className="project-item-wrapper style1">
        {portfolioData.map((item, index) => (
          <div
            key={index}
            className={`project-item-card style1 fadeInUp ${activeTab === index ? 'active' : ''}`}
            data-wow-delay={`${0.2 + index * 0.2}s`}
            onClick={() => setActiveTab(index)}
          >
            <div className="project-icon">
              <img src={item.image} alt="icon" />
            </div>
            <h5>{item.name}</h5>
          </div>
        ))}
      </div>

      {portfolioData.length > 0 && (
        <div className="project-wrapper style1">
          <div className="row gy-5 gx-60">
            <div className="col-xl-5">
              <div className="project-thumb img-custom-anim-left fadeInUp" data-wow-delay=".5s">
                <img src={portfolioData[activeTab].image} alt="thumb" />
              </div>
            </div>
            <div className="col-xl-7">
              <div className="project-content-wrapper style1">
                <div className="project-content style1">
                  <h3>{portfolioData[activeTab].name}</h3>
                  <p className="text" dangerouslySetInnerHTML={{ __html: truncateString(portfolioData[activeTab].details, 500)}} />
                </div>
              </div>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};

export default Portfolio;
