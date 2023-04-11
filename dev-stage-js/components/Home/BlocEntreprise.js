import React, { useState } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css';
import {   Navigation } from "swiper";

function BlocPartenaire({allEntreprise}) {

    // const options = {
    //     loop: true,
    //     margin: 0,
    //     nav: true,
    //     mouseDrag: true,
    //     items: 5,
    //     dots: false,
    //     autoplay: true,
    //     smartSpeed: 500,
    //     autoplayHoverPause: true,
    //     navText: [
    //       "<i class='bx bx-chevron-left'></i>",
    //       "<i class='bx bx-chevron-right'></i>",
    //     ],
    //   };
    const options = {
        loop: true,
        margin: 0,   
        mouseDrag: true,
        items:  5,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                nav: true,
                items:4
            }
        },
        dots: false,
        autoplay: true,
        smartSpeed: 500,
        autoplayHoverPause: true,
        nav: true,
        navText: [
          "<i class='bx bx-chevron-left'></i>",
          "<i class='bx bx-chevron-right'></i>",
        ]
      };
    //const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-partenaire');
    //console.log('allPartenaire');
    return(
        <div id="bloc_entreprise">
            <div className="container">
                <div className="row justify-content-center">
                    <Swiper 
                        className="home-sliders owl-carousel owl-theme" 
                        loop={true} 
                        navigation={true} modules={[Navigation]}    
                        grabCursor={true}
                        spaceBetween={50} 
                        slidesPerView={5} 
                        breakpoints={{
                            0: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                              },
                              600: {
                              slidesPerView: 2,
                              spaceBetween: 20,
                            },
                            768: {
                              slidesPerView: 4,
                              spaceBetween: 40,
                            },
                            1024: {
                              slidesPerView: 5,
                              spaceBetween: 50,
                            },
                        }}
                    >
                        {allEntreprise?.map((entreprise,index) => 
                            <SwiperSlide key={index}>
                            <div className="d-flex" >
                                <div className="image_entreprise">
                                    <img 
                                        src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/photos-membres/${entreprise.photo}`} 
                                        className="banner-img" alt="" 
                                    />
                                </div>       
                
                            </div>
                            </SwiperSlide>
                        )} 
                    </Swiper>
                </div>      
            </div>
        </div>
        
    )
    
}

export default BlocPartenaire  
