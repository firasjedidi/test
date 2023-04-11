import React, { Component } from 'react';
import Link from 'next/link';
import dynamic from 'next/dynamic';
// const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    loop: true,
    nav: false,
    dots: false,
    smartSpeed: 2000,
    margin: 30,
    autoplayHoverPause: true,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        576: {
            items: 3
        },
        768: {
            items: 4
        },
        1200: {
            items: 5
        }
    }
}

class PartnerStyleOne extends Component {

    state = { 
        display: false    
    };

    componentDidMount(){ 
        this.setState({ display: true }) 
    }

    render() {
        return (
            <div className="partner-section ptb-100">
                <div className="container">
                    {/* {this.state.display ? <OwlCarousel 
                        className="partner-slider owl-carousel owl-theme"
                        {...options}
                    >
                        <div className="partner-item">
                            <a href="#" target="_blank">
                                <img src="/images/partners/partner1.png" alt="partner" />
                            </a>
                        </div>
                        <div className="partner-item">
                            <a href="#" target="_blank">
                                <img src="/images/partners/partner2.png" alt="partner" />
                            </a>
                        </div>
                        <div className="partner-item">
                            <a href="#" target="_blank">
                                <img src="/images/partners/partner3.png" alt="partner" />
                            </a> 
                        </div>
                        <div className="partner-item">
                            <a href="#" target="_blank">
                                <img src="/images/partners/partner4.png" alt="partner" />
                            </a> 
                        </div>
                        <div className="partner-item">
                            <a href="#" target="_blank">
                                <img src="/images/partners/partner5.png" alt="partner" />
                            </a> 
                        </div>
                    </OwlCarousel> : ''} */}
                </div>
            </div>
        );
    }
}

export default PartnerStyleOne;