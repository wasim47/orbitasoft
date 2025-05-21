import React from 'react';

const Video: React.FC = () => {
  return (
    <div className="video-box-area fadeInUp" data-wow-delay="0.6s">
   <div className="video-wrap style1 img-custom-anim-left fadeInUp" data-wow-delay=".6s">
      <div className="container">
         <div className="video-box fix background-image" data-bg-src="assets/img/video/videoThumb1_1.png">
            <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" className="play-btn popup-video"><i
                  className="fa-sharp fa-solid fa-play"></i></a>
         </div>
      </div>
   </div>
</div>
  );
};

export default Video;
