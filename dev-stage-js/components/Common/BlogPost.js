import React, { Component } from 'react';
import Link from 'next/link';

class BlogPost extends Component {
    render() {
        return (
            <section className="blog-section pt-100 pb-70">
                <div className="container">
                    <div className="section-title">
                        <h2>Our <span>Latest</span> News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <div className="bar"></div>
                    </div>

                    <div className="row">
                        <div className="col-lg-4 col-md-6">
                            <div className="single-blog">
                                <div className="image">
                                    <Link href="/blog-details">
                                        <a>
                                            <img src="/images/blog/blog1.jpg" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <span>20 April 2020</span>
                                    <h3>
                                        <Link href="/blog-details">
                                            <a>Great Tips To Earn More Money From Digital Industry</a>
                                        </Link>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>

                                    <Link href="/blog-details">
                                        <a className="read-more">Read More</a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-md-6">
                            <div className="single-blog">
                                <div className="image">
                                    <Link href="/blog-details">
                                        <a>
                                            <img src="/images/blog/blog2.jpg" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <span>21 April 2020</span>
                                    <h3>
                                        <Link href="/blog-details">
                                            <a>The Billionaire Guide On Design That will Get You Rich</a>
                                        </Link>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>
                                    
                                    <Link href="/blog-details">
                                        <a className="read-more">Read More</a>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                            <div className="single-blog">
                                <div className="image">
                                    <Link href="/blog-details">
                                        <a>
                                            <img src="/images/blog/blog3.jpg" alt="image" />
                                        </a>
                                    </Link>
                                </div>

                                <div className="content">
                                    <span>22 April 2020</span>
                                    <h3>
                                        <Link href="/blog-details">
                                            <a>Making Peace With The Feast Or Famine Of Freelancing</a>
                                        </Link>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor</p>
                                    
                                    <Link href="/blog-details">
                                        <a className="read-more">Read More</a>
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

export default BlogPost;