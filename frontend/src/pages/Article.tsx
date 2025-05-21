import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const Article: React.FC = () => {
    const { slug } = useParams<{ slug: string }>();
    const [pageData, setPageData] = useState<any>(null);
    const [error, setError] = useState<string | null>(null);
    const [loading, setLoading] = useState<boolean>(true);
    const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

    useEffect(() => {
        const fetchPageData = async () => {
            setLoading(true); // Start loading
            setError(null); // Reset error state

            try {
                const response = await fetch(`${API_BASE_URL}/contents/${slug}`);
                if (!response.ok) throw new Error('No data found');

                const result = await response.json();
                if (result && result.id) {
                    setPageData(result);
                } else {
                    setError('No data found');
                }
            } catch (err: any) {
                setError(err.message);
            } finally {
                setLoading(false); // End loading
            }
        };

        fetchPageData();
    }, [slug]);

    return (
        <>
            <section className="about-section section-padding">
                <div className="breadcrumb-wrapper bg-cover" style={{ backgroundImage: "url('/assets/img/breadcrumb.jpg')" }}>
                    <div className="border-shape">
                        <img src="assets/img/element.png" alt="shape-img" />
                    </div>
                    <div className="line-shape">
                        <img src="assets/img/line-element.png" alt="shape-img" />
                    </div>
                    <div className="container">
                        <div className="page-heading">
                            <h1 className="wow fadeInUp" data-wow-delay=".3s">
                                {loading ? 'Loading...' : pageData?.title || 'Page Title'}
                            </h1>
                            <ul className="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <i className="fas fa-chevron-right"></i>
                                </li>
                                <li>
                                    {loading ? 'Loading...' : pageData?.title}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section className="about-section section-padding fix bg-cover" style={{ backgroundImage: "url('/assets/img/service/service-bg-2.jpg')" }}>
                <div className="container">
                    <div className="about-wrapper style-2">
                        <div className="row">
                            <div className="col-lg-10 offset-1">
                                {loading ? (
                                    <div>Loading content...</div>
                                ) : error ? (
                                    <div className="alert alert-danger">{error}</div>
                                ) : (
                                    <p className="text" dangerouslySetInnerHTML={{ __html: pageData?.content || 'Content not available.' }} />
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
};

export default Article;
