import React, { Component } from 'react';

class FeaturedSolutions extends Component {
    render() {
        return (
            <section className="solutions-section bor-tb">
                <div className="container-fluid">
                    <div className="row align-items-center">
                        <div className="col-lg-6">
                            <div className="solutions-content-area">
                                <div className="solutions-content">
                                    <h3>Our Featured Solutions</h3>
                                    <div className="bar"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                </div>

                                <div className="solutions-details">
                                    <div className="icon">
                                        <i className="flaticon-blog"></i>
                                    </div>
                                    <h3>Programmatic Advertising</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                </div>

                                <div className="solutions-details">
                                    <div className="icon bg-d3fbf9">
                                        <i className="flaticon-software"></i>
                                    </div>
                                    <h3>Strategy & Research</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                </div>

                                <div className="solutions-details">
                                    <div className="icon bg-fce8c9">
                                        <i className="flaticon-analysis"></i>
                                    </div>
                                    <h3>Design & Development</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                </div>

                                <div className="solutions-details">
                                    <div className="icon bg-d5e6fe">
                                        <i className="flaticon-laptop"></i>
                                    </div>
                                    <h3>Branding & Marketing</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-6 pr-0">
                            <div className="solutions-image">
                                <img src="/images/solutions.png" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}

export default FeaturedSolutions;