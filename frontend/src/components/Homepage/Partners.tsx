import React, {useState, useEffect} from 'react';

interface Client{
   name: string,
   url: string,
   image: string,
}

const Partners: React.FC = () => {
   const [clientData, setData] = useState<Client[]>([])
   const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

   useEffect(() => {
      const fetchClient = async () => {
         const response = await fetch(`${API_BASE_URL}/clients`);
         const output = await response.json()
         setData(output.data)
      };

      fetchClient();
   },[]);

  return (
    <div className="brand-slider-section fix">
   <div className="brand-slider-container-wrapper style1">
      <div className="container">
         <div className="row">
            <div className="slider-area brandSliderOne">
               <div className="swiper gt-slider" id="brandSliderOne"
                  data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":3,"centeredSlides":true},"768":{"slidesPerView":4},"992":{"slidesPerView":6},"1200":{"slidesPerView":7}}}'>
                  
                  <div className="swiper-wrapper">
                     {
                        clientData.map((client) => (
                           <div className="swiper-slide">
                              <div className="brand-logo">
                                 <img src={client.image} alt={client.name}/>
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
  );
};

export default Partners;
