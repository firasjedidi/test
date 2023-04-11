import React, { Component } from 'react';
import Link from 'next/link';
import VisibilitySensor from "react-visibility-sensor";
import Image from 'next/image';
import {htmlToReact} from '../../utils/functions';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation,Autoplay } from 'swiper';
import zigzagvi from '../../assets/images/motif-zigzag-violet1.png'
import zigzagbl from '../../assets/images/motif-zigzag-blanc.png'
import shape1 from '../../assets/images/motif-point06.png'
import shape2 from '../../assets/images/motif-point10.png'
import shape3 from '../../assets/images/motif-point11.png'
import shape4 from '../../assets/images/motif-point07.png'

// Import Swiper styles
import 'swiper/css';


class BannerSlider extends Component {

    state = { 
        display: false,
        smartSpeed:  this.props.ParamSites.parameters[1] 
    };

    componentDidMount(){ 
      this.setState({ display: true }) 
       // const parametres = this.props.ParamSites;
      //console.log(this.state.smartSpeed); 
      
    }

    render() {
        return (
            <div className="main-banner-area">
                <div className="slider-shape slider-shape1"> 
                    <Image src={shape1} width="198" height="74"/>  
                </div>
                <div className="slider-shape slider-shape2"> 
                    <Image src={shape2} width="35" height="72"/>  
                </div>
                <div className="slider-shape slider-shape3"> 
                    <Image src={shape3} width="120" height="38"/>  
                </div>
                <div className="slider-shape slider-shape4"> 
                    <Image src={shape4} width="5" height="104"/>  
                </div>
                <div className="slider-shape slider-shape5 shape-zizag"> 
                    <Image src={zigzagvi} width="88" height="19"/>  
                </div>
                <div className="slider-shape slider-shape6 shape-zizag"> 
                    <Image src={zigzagbl} placeholder="blur"   width="88" height="19"/> 
                </div>
                {this.state.display ? 
                    <Swiper 
                        className="home-sliders owl-carousel owl-theme"
                        // {...options }
                        effect={"fade"}
                        
                        loop={true} 
                        autoplay={{
                            delay: 4500,
                            disableOnInteraction: false,
                        }}
                        modules={[Navigation,Autoplay]}
                        slidesPerView={1}
                        breakpoints={{
                            0: {
                                slidesPerView: 1,
                                spaceBetween: 70,
                            },
                        }}    
                    >
                
                        {this.props.HomeSlides.homeSlides.map((slide,index) => 
                            <SwiperSlide key={index}>
                                <div className="home-item item-bg1" >
                                    <div className="d-table">
                                        <div className="d-table-cell">
                                            <VisibilitySensor>
                                                {({ isVisible }) => (
                                                    <div className="container" >
                                                        <div className="main-banner-content">
                                                            {htmlToReact(slide.description)} 
                                                        </div>
                                                        <div 
                                                            className={
                                                                `banner-image `
                                                            }
                                                            // ${isVisible ? "animated fadeInUp" : ''}
                                                        >
                                                            <Link href="/">
                                                                <a className="navbar-brand">
                                                                    <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/carrousel/${slide.image}`} className="banner-img" alt="" />
                                                                </a>
                                                            </Link>
                                                        </div>
                                                    </div>
                                                )}
                                            </VisibilitySensor>
                                        </div>
                                    </div>
                                </div> 
                            </SwiperSlide>
                        )}
    
                    </Swiper> 
                    : 
                    ''
                }
            </div>
        );
    }
}

export default BannerSlider;