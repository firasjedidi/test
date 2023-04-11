import React from 'react';
import {htmlToReact} from '../../utils/functions';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation,Autoplay } from 'swiper';

function Actu({allActus}) {

    // const options = {
    //     loop: true,
    //     margin: 0,   
    //     mouseDrag: true,
    //     items: 4,
    //     responsive:{
    //         0:{
    //             items:1
    //         },

    //         600:{

    //             items:1

    //         },

    //         1000:{

    //             nav: true,

    //             items:2

    //         }

    //     },
    //     dots: true,
    //     autoplay: true,
    //     smartSpeed: 500,
    //     autoplayHoverPause: true,
    //     nav: true,
    //     navText: [
    //       "<i class='bx bx-chevron-left'></i>",
    //       "<i class='bx bx-chevron-right'></i>",
    //     ]
    //   };

  return (
    <div className="actualite pt-100  pb-100">
      <div className="container-fluid">
        <div className="row justify-content-center">
          <Swiper
            className="home-sliders owl-carousel owl-theme" 
            loop={true} 
            navigation={true} modules={[Navigation]}    
            grabCursor={true}
            spaceBetween={50} 
            slidesPerView={2} 
            breakpoints={{
              0: {
                  slidesPerView: 1,
                  spaceBetween: 40,
                },
                600: {
                slidesPerView: 1,
                spaceBetween: 40,
              },
            }}
          > 
            {allActus?.map((actualite,actu )=>  
              <SwiperSlide key={actu}>
                  <div className=" row align-items-center justify-content-center    " >
                    <div className='col-md-8  p-0'>
                      <div className="actu-img">
                        <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/gestionActualite/${actualite.image}`} className="banner-img" alt="" />
                      </div> 
                    </div>
                    <div className='col-md-4 p-0'>
                      <div className='description'>
                        <div className="actu-paragra">
                          <p className="actu-date"><i className="fal fa-horizontal-rule"></i>{actualite.date_debut}</p>
                          <h3 className="actu-titre">{actualite.titre}</h3>
                          <>{htmlToReact(actualite.courte_description)}</>
                          <button className="actu-btn boutton_primaire">En savoir plus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </SwiperSlide>
                )}
            </Swiper> 
          </div>
        </div>
      </div>
    );
}


export default Actu




