import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { useParams } from 'react-router-dom';

interface Services {
  name: string,
  details: string,
  url: string,
  image: string,
}

interface ServiceDetails {
  name: string,
  details: string,
  url: string,
  image: string,
}

const Service: React.FC = () => {
  const { slug } = useParams<{ slug: string }>();
  const [serviceDetails, setDetails] = useState<ServiceDetails>()
  const [serviceData, setData] = useState<Services[]>([])
  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

  const truncateString = (str: string, length: any) => {
    return str.length > length ? str.substring(0, length) + '...' : str;
  };

  useEffect(() => {
    const fetchService = async () => {
      const response = await fetch(`${API_BASE_URL}/service/${slug}`);
      const output = await response.json()
      setData(output.services)
      setDetails(output.details)
      // console.log(output.details)
    };

    fetchService();
  }, [slug]);

  return (
    <div>
      <div className="breadcrumb-wrapper bg-cover" style={{ backgroundImage: "url('/assets/img/breadcrumb.jpg')" }}>
        <div className="border-shape">
          <img src="/assets/img/element.png" alt="shape-img" />
        </div>
        <div className="line-shape">
          <img src="/assets/img/line-element.png" alt="shape-img" />
        </div>
        <div className="container">
          <div className="page-heading">
            <h1 className="wow fadeInUp" data-wow-delay=".3s">Services Details</h1>
            <ul className="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
              <li>
                <a href="index-2.html">
                  Home
                </a>
              </li>
              <li>
                <i className="fas fa-chevron-right"></i>
              </li>
              <li>
                Services Details
              </li>
            </ul>
          </div>
        </div>
      </div>

      <section className="service-details-section fix section-padding">
        <div className="container">
          <div className="service-details-wrapper">
            <div className="row g-4">
              <div className="col-12 col-lg-4 order-2 order-md-1">
                <div className="main-sidebar">
                  <div className="single-sidebar-widget">
                    <div className="wid-title">
                      <h3>All Services</h3>
                    </div>
                    <div className="widget-categories">
                      <ul>
                        {
                          serviceData.map((service) => (
                            <li>
                              <Link
                                to={"/services/" + service.url}
                                className={slug === service.url ? 'active' : ''}
                              >
                                {service.name} <i className="fa-solid fa-arrow-right-long"></i>
                              </Link>
                            </li>

                          ))
                        }
                      </ul>
                    </div>
                  </div>
                  <div className="single-sidebar-image bg-cover" style={{ backgroundImage: "url('assets/img/service/post.jpg')" }}>

                    <div className="contact-text">
                      <div className="icon">
                        <i className="fa-solid fa-phone"></i>
                      </div>
                      <h4>Need Help? Call Here</h4>
                      <h5>
                        <a href="tel:+8801754686706">+8801754686706</a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-12 col-lg-8 order-1 order-md-2">
                <div className="service-details-items">
                  <div className="details-image">
                    <img src={serviceDetails?.image} alt={serviceDetails?.name} />
                  </div>
                  <div className="details-content">
                    <h3>{serviceDetails?.name}</h3>
                    <p className="mt-3" dangerouslySetInnerHTML={{ __html: serviceDetails?.details || 'Details not available.' }} />
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Service;
