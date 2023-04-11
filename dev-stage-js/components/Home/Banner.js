import React, { Component } from 'react';
import Link from 'next/link';
import ScrollAnimation from 'react-animate-on-scroll';
import Image from 'next/image';

class Banner extends Component {
    render() {
        return (
            <div className="main-banner-area-three">
                <div className="d-table">
                    <div className="d-table-cell">
                        <div className="container mt-50">
                            <div className="row align-items-center">
                                <div className="col-lg-6">
                                    <div className="main-banner-content">
                                        <span>Digital Marketing</span>
                                        <h1>Digital Agency and Marketing</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing incididunt ut laboredolore magna aliqua elsed  tempomet, consectetur adipiscing.</p>

                                        <div className="banner-btn">
                                            <Link href="/contact">
                                                <a className="default-btn">Get Started</a>
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-lg-6">
                                    <div className="banner-image">
                                        <ScrollAnimation animateIn="fadeInUp" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape1.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
 
                                        <ScrollAnimation animateIn="fadeInDown" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape2.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
 
                                        <ScrollAnimation animateIn="fadeInUp" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape3.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
 
                                        <ScrollAnimation animateIn="zoomIn" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape4.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
 
                                        <ScrollAnimation animateIn="fadeInDown" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape5.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
 
                                        <ScrollAnimation animateIn="zoomIn" delay={50} animateOnce={true}>
                                            <Image src="/images/home-three-shape6.png" alt="me" width="100" height="200" />
                                        </ScrollAnimation>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Shape Images */}
                <div className="default-shape">
                    <div className="shape-1">
                        <Image src="/images/shape/shape4.png" alt="me" width="15" height="15" />
                    </div>
                    <div className="shape-2 rotateme">
                        <Image src="/images/shape/shape5.svg" alt="me" width="22" height="22" />
                    </div>
                    <div className="shape-3">
                        <Image src="/images/shape/shape6.svg" alt="me" width="21" height="20" />
                    </div>
                    <div className="shape-4">
                        <Image src="/images/shape/shape7.png" alt="me" width="18" height="18" />
                    </div>
                    <div className="shape-5">
                        <Image src="/images/shape/shape8.png" alt="me" width="12" height="11" />
                    </div>
                </div>
            </div>
        );
    }
}

export default Banner;