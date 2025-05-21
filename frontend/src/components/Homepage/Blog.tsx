// components/Homepage/CounterSection.js
import React from 'react';

const Blog: React.FC = () => {
  return (
    
<section className="blog-section space fix">
   <div className="blog-wrapper style1 space pt-0">
      <div className="container">
         <div className="title-wrap mb-45">
            <div className="section-title">
               <div className="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"/> <span> Blog & News
                  </span><img src="assets/img/icon/arrowRight.svg" alt="icon"/></div>
               <h2 className="title">Featured News And Insights</h2>
            </div>
            <div className="arrow-btn text-end fadeInUp" data-wow-delay=".9s">
               <button data-slider-prev="#blogSliderOne" className="slider-arrow style1"><i
                     className="fa-sharp fa-regular fa-arrow-left-long"></i></button>
               <button data-slider-next="#blogSliderOne" className="slider-arrow style1 slider-next"><i
                     className="fa-regular fa-arrow-right-long"></i> </button>
            </div>
         </div>
         <div className="row">
            <div className="slider-area blogSliderOne">
               <div className="swiper gt-slider" id="blogSliderOne"
                  data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                  <div className="swiper-wrapper">
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-left fadeInUp" data-wow-delay=".4s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_1.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag">Shared Hosting</div>
                                 <div className="date">MARCH 24, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Attentive was born in 2015 help sales teams</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_1.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-top fadeInUp" data-wow-delay=".6s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_2.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag"> Uncategorized</div>
                                 <div className="date">MARCH 14, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Best and fastest data server ever</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_2.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-left fadeInUp" data-wow-delay=".8s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_3.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag">Technology</div>
                                 <div className="date">MARCH 29, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Life won’t one beast air over above all</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_3.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-left fadeInUp" data-wow-delay="1s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_1.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag">Shared Hosting</div>
                                 <div className="date">MARCH 24, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Attentive was born in 2015 help sales teams</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_1.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-left fadeInUp" data-wow-delay=".4s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_2.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag"> Uncategorized</div>
                                 <div className="date">MARCH 14, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Best and fastest data server ever</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_2.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div className="swiper-slide">
                        <div className="blog-card style1 img-custom-anim-left fadeInUp" data-wow-delay=".8s">
                           <div className="blog-card-thumb">
                              <img src="assets/img/blog/blogThumb1_3.jpg" alt="thumb"/>
                           </div>
                           <div className="blog-card-body">
                              <div className="blog-meta">
                                 <div className="tag">Technology</div>
                                 <div className="date">MARCH 29, 2024</div>
                              </div>
                              <h3><a href="news-details.html">Life won’t one beast air over above all</a></h3>
                              <div className="author-meta">
                                 <div className="fancy-box style1">
                                    <div className="item"><img src="assets/img/blog/blogProfile1_3.png" alt="thumb"/>
                                    </div>
                                    <div className="item">
                                       <h6>Admin</h6>
                                       <p>Co, Founder</p>
                                    </div>
                                 </div>

                                 <a className="link-btn style1" href="news-details.html"><i
                                       className="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
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

export default Blog;
