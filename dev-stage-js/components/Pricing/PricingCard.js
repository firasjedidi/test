import React, { Component } from 'react';
import Link from 'next/link';

class PricingCard extends Component {
    render() {
        return (
            <section className="pricing-section pt-100 pb-70">
                <div className="container">
                    <div className="section-title">
                        <h2>Our <span>Pricing</span> Plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <div className="bar"></div>
                    </div>

                    <div className="row">
                        <div className="col-lg-4 col-md-6">
                            <div className="single-pricing">
                                <div className="pricing-header">
                                    <h3>Basic</h3>
                                    <p>Business Up</p>
                                </div>

                                <div className="price">
                                    <sup>$</sup>29<sub>/mo</sub>
                                </div>
                        
                                <ul className="pricing-list">
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        10 GB Hosting 
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        2 Unique Users 
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        12 GB Capacity
                                    </li>
                                    <li>
                                        <i className="flaticon-cancel"></i> 
                                        Anywhere Access
                                    </li>
                                    <li>
                                        <i className="flaticon-cancel"></i> 
                                        Weekly Backup
                                    </li>
                                    <li>
                                        <i className="flaticon-cancel"></i> 
                                        Support 24/Hour
                                    </li>
                                </ul>

                                <div className="price-btn">
                                    <Link href="/contact">
                                        <a className="default-btn">Buy Now</a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-md-6">
                            <div className="single-pricing">
                                <div className="pricing-header">
                                    <h3>Standard</h3>
                                    <p>Business Up</p>
                                </div>

                                <div className="price">
                                    <sup>$</sup>79<sub>/mo</sub>
                                </div>
                        
                                <ul className="pricing-list">
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Visitor Info
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Quick Responses
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        12 GB Capacity
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Anywhere Access
                                    </li>
                                    <li>
                                        <i className="flaticon-cancel"></i> 
                                        Weekly Backup
                                    </li>
                                    <li>
                                        <i className="flaticon-cancel"></i> 
                                        Support 24/Hour
                                    </li>
                                </ul>

                                <div className="price-btn">
                                    <Link href="/contact">
                                        <a className="default-btn">Buy Now</a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                            <div className="single-pricing">
                                <div className="pricing-header">
                                    <h3>Premium</h3>
                                    <p>Business Up</p>
                                </div>

                                <div className="price">
                                    <sup>$</sup>99<sub>/mo</sub>
                                </div>
                        
                                <ul className="pricing-list">
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        10 GB Hosting 
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        2 Unique Users 
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        12 GB Capacity
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Anywhere Access
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Weekly Backup
                                    </li>
                                    <li>
                                        <i className="flaticon-checked"></i> 
                                        Support 24/Hour
                                    </li>
                                </ul>

                                <div className="price-btn">
                                    <Link href="/contact">
                                        <a className="default-btn">Buy Now</a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Shape Images */}
                <div className="default-shape">
                    <div className="shape-1">
                        <img src="/images/shape/shape4.png" alt="image" />
                    </div>
                    <div className="shape-2 rotateme">
                        <img src="/images/shape/shape5.svg" alt="image" />
                    </div>
                    <div className="shape-3">
                        <img src="/images/shape/shape6.svg" alt="image" />
                    </div>
                    <div className="shape-4">
                        <img src="/images/shape/shape7.png" alt="image" />
                    </div>
                    <div className="shape-5">
                        <img src="/images/shape/shape8.png" alt="image" />
                    </div>
                </div>
            </section>
        );
    }
}

export default PricingCard;