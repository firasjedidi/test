import React from 'react';
import Link from 'next/link';
import { htmlToReact } from '../../utils/functions';
import Image from 'next/image';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation,Autoplay } from 'swiper';
import zigzagvi from '../../assets/images/motif-zigzag-violet1.png'
import shape2 from '../../assets/images/motif-point06.png'
function LastOffres({allLastOffres}) {
 
    //    const diffM =(date1, date2) => {    
    //     let months = date1 . diff(date2, 'months');
    //     date2.add(months, 'months');
    //     console.log(months + ' months '); 
    //     return {months};
    // }
    return (
        <div id='last_offres' className="main-banner-area last_offres">
            <div className="slider-shape slider-shape1"> 
                <Image src={shape2} width="237" height="74"/>  
            </div>
            <div className="slider-shape slider-shape2 shape-zizag"> 
                <Image src={zigzagvi} width="88" height="19"/>  
            </div>
            <div className="slider-shape slider-shape5 shape-zizag"> 
                <Image src={zigzagvi} width="88" height="19"/>  
            </div>

            <section className="bg-color pt-100 pb-70" >
                <div className="container-fluid">    
                    <div className="row bloc-last-offres">
                        <h2>Les dernières offres de stages</h2>
                        <Swiper
                            className="home-sliders owl-carousel owl-theme" 
                            loop={true} 
                            navigation={true} modules={[Navigation,Autoplay]}    
                            grabCursor={true}
                            spaceBetween={80}   
                            slidesPerView={1} 
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
                                slidesPerView: 3,
                                spaceBetween: 40,
                                },
                                1024: {
                                slidesPerView: 4,
                                spaceBetween: 40,
                                },
                            }}

                        >
                        {allLastOffres.map(offre => 
                            <SwiperSlide key={offre.id} >
                                <div >
                                    <div className="single-services" >
                                        <div className="image_membre">
                                            <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/photos-membres/${offre.photo_membre}`} alt="" />
                                        </div> 
                                        <span>{offre.type_contrat}</span>
                                        <h3>{offre.titre_categorie}</h3>
                                        <p className='periode'>Période: mois </p>
                                        <p className='description' > 
                                            {offre.description_offres} 
                                        </p>
                                        <span><a href='/details_offre' > En savoir plus</a></span> 
                                        <i className="fas fa-plus"></i>
                                        {/*  
                                            {moment('offre.date_debut_stage', 'offre.date_fin_stage')}
                                            <p className='periode'>Période:{Date.dateDiff(offre.date_debut_stage, offre.date_fin_stage)} mois </p>
                                            <p className='periode'>Période:{alert(daysBetween({offre.date_debut_stage} , {offre.date_debut_stage}));} mois </p>
                                        */}                               
                                    </div>
                                </div>
                            </SwiperSlide>
                        )}
                        </Swiper>
                    </div>
                </div>
            </section>
        </div>
    );
}


export default LastOffres
