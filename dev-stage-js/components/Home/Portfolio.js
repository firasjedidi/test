import React, { Component } from 'react';
import Link from 'next/link';

class Portfolio extends Component {
    render() {
        return (
            <section className="protfolio-section pt-100 pb-70">
                <div className="container">
                    <div className="section-title">
                        <h2>Our <span>Impressive</span> Portfolio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <div className="bar"></div>
                    </div>

                    <div className="row">
                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio1.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <Link href="/project-details">
                                        <a>
                                            <h3>Creative Web Develop</h3>
                                            <span>Web Design</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio2.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                     <Link href="/project-details">
                                        <a>
                                            <h3>Digital Services</h3>
                                            <span>App Development</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio3.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <Link href="/project-details">
                                        <a>
                                            <h3>Complex Design</h3>
                                            <span>Software Development</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio4.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <Link href="/project-details">
                                        <a>
                                            <h3>Creative Web Develop</h3>
                                            <span>React Development</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio5.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <Link href="/project-details">
                                        <a>
                                            <h3>Digital Services</h3>
                                            <span>E-commerce Development</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-sm-6">
                            <div className="single-protfolio">
                                <div className="image">
                                    <Link href="/project-details">
                                        <a>
                                            <img src="/images/portfolio/portfolio6.png" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <Link href="/project-details">
                                        <a>
                                            <h3>Complex Design</h3>
                                            <span>Software Engineering</span>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}

export default Portfolio;