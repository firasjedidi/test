import React, { Component } from 'react';
import Link from 'next/link';

class SmartApproach extends Component {
    render() {
        return (
            <section className="audience-section ptb-100">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6">
                            <div className="audience-image">
                                <img src="/images/audience.png" alt="image" />
                            </div>
                        </div>

                        <div className="col-lg-6">
                            <div className="audience-content">
                                <h3>Engaging New Audience Through Smart Approach </h3>
                                <div className="bar"></div>
                                
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                <div className="audience-btn">
                                    <Link href="/contact">
                                        <a className="default-btn">Get Started</a>
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

export default SmartApproach;