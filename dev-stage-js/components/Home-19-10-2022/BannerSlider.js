import React, { Component } from 'react';
import Link from 'next/link';
import VisibilitySensor from "react-visibility-sensor";
import dynamic from 'next/dynamic';
import Image from 'next/image';
import {htmlToReact} from '../../utils/functions';

// const OwlCarousel = dynamic(import('react-owl-carousel3'));
//console.log(this.state.smartSpeed);
const options = {
    loop: true,
    margin: 0,
    nav: true,
    mouseDrag: true,
    items: 1,
    dots: false,
    autoplay: true,
    smartSpeed: 500,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: [
        "<i class='bx bx-chevron-left'></i>",
        "<i class='bx bx-chevron-right'></i>",
    ],
}

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
                    <Image src="/images/shape/slider-shape1.png" width="198" height="74"/>  
                </div>
                <div className="slider-shape slider-shape2"> 
                    <Image src="/images/shape/slider-shape2.png" width="35" height="72"/>  
                </div>
                <div className="slider-shape slider-shape3"> 
                 <Image src="/images/shape/slider-shape3.png" width="120" height="38"/>  
                </div>
                <div className="slider-shape slider-shape4"> 
                    <Image src="/images/shape/slider-shape4.png" width="5" height="104"/>  
                </div>
                <div className="slider-shape slider-shape5 shape-zizag"> 
                    <Image src="/images/shape/slider-shape5.png" width="88" height="19"/>  
                </div>
                <div className="slider-shape slider-shape6 shape-zizag"> 
                    <Image src="/images/shape/slider-shape5.png" width="88" height="19"/> 
                </div>
                {/* {this.state.display ? <OwlCarousel 
                    className="home-sliders owl-carousel owl-theme"
                    {...options }
                >
              
                    {this.props.HomeSlides.homeSlides.map(slide => 
                       <div className="home-item item-bg1" key={slide.id}>
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
                                                   `banner-image ${isVisible ? "animated fadeInUp" : ''}`
                                               }
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
                    )}
   
                </OwlCarousel> : ''} */}
            </div>
        );
    }
}

export default BannerSlider;