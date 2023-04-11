import React, { Component } from 'react';
import Link from 'next/link';
import Image from 'next/image';

class Footer extends Component {
    render() {
        let currentYear = new Date().getFullYear();
        const {bottom} = this.props
        return (
            <div  className={`  ${bottom ? 'main-banner-area   footer-bottom' : ''}`}>    
                <div id="bloc-footer" className={`  ${bottom ? 'main-banner-area ' : 'main-banner-area footerbg'}`}>
                    <div className="slider-shape slider-shape1"> 
                        <Image src="/images/shape/motif-point10.png" width="50" height="72"/>  
                    </div>
                    <div className="slider-shape slider-shape2"> 
                        <Image src="/images/shape/motif-point12.png" width="136" height="50"/>  
                    </div>
                    <div className="slider-shape slider-shape5 shape-zizag"> 
                        <Image src="/images/shape/motif-zigzag-violet2.png" width="88" height="19"/>  
                    </div>
                    <footer className="footer">
                        <div className="container">
                            <div className="row justify-content-center align-items-center">
                                <div className="col-md-4 ">
                                    <div className="footer-info-contact">
                                        <i className="flaticon-phone-call"></i>
                                        <span>+123(456)123</span>
                                    </div>
                                </div>
                                <div className="col-md-4 ">
                                    <div className="image-logo justify-content-center d-flex">
                                        <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/logo_2.png`} alt="logo" />
                                    </div>
                                </div>
                                <div className="col-md-4 ">
                                    <div className="footer-info-contact">
                                         <i className="flaticon-envelope"></i><span>Hello@stage.tn</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div className="lines">
                            <div className="line"></div>
                            <div className="line"></div>
                            <div className="line"></div>
                        </div>
                    </footer>
                </div>
                {/* Copyright area */}
                <div className="copyright-area">
                    <div className="container">
                        <div className="copyright-area-content">
                            <div className="row align-items-center">
                                <div className="col-lg-12 center">
                                    <p><a href='/mention-legale'>Mentions légales </a> -  <a href='plan-du-site'>Plan de site</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Footer;