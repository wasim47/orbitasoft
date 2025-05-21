import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { useParams } from 'react-router-dom';

interface Services {
  name: string,
  details: string,
  url: string,
  image: string,
}

const Service: React.FC = () => {
  const { slug } = useParams<{ slug: string }>();
  const [serviceData, setData] = useState<Services[]>([]);
  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

  const truncateString = (str: string, length: any) => {
    return str.length > length ? str.substring(0, length) + '...' : str;
  };

  useEffect(() => {
    const fetchService = async () => {
      const url = slug
        ? `${API_BASE_URL}/services/${slug}`
        : `${API_BASE_URL}/services`;

      const response = await fetch(url);
      const output = await response.json();
      setData(Array.isArray(output.data) ? output.data : [output.data]);
    };

    fetchService();
  }, [slug]); // ✅ Added slug to dependency array


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
            <h1 className="wow fadeInUp" data-wow-delay=".3s">Our Service</h1>
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
                Our Service
              </li>
            </ul>
          </div>
        </div>
      </div>

      <section className="service-section space fix">
        <div className="service-container-wrapper style1">
          <div className="container">
            <div className="title-wrap mb-45">
              <div className="section-title">
                <div className="subtitle"> <img src="/assets/img/icon/arrowLeft.svg" alt="icon" /> <span> Our Services
                </span><img src="/assets/img/icon/arrowRight.svg" alt="icon" /></div>
                <h2 className="title">Elevating Businesses with IT Ingenuity</h2>
              </div>
            </div>

            <div className="row">

              {
                serviceData.map((service) => (
                  <div className="col-sm-3 p-2">
                    <div className="service-card style1">
                      <div className="icon">
                        <img src={service.image} alt={service.name} />
                      </div>
                      <div className="body">
                        <h3> <a href="service-details.html">{service.name}</a> </h3>
                        <p dangerouslySetInnerHTML={{ __html: truncateString(service.details, 100) }} />

                        <Link to={"/service/" + service.url} className="link-btn style1">Read more <i
                          className="fa-regular fa-chevrons-right"></i></Link>
                      </div>
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

export default Service;
