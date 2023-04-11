import React, { Component } from 'react';
import Link from 'next/link';
import Image from 'next/image';

function Newsletter() {
    return(
        <div className="footer-section pt-100 main-banner-area galerieImg">
            <div className="slider-shape slider-shape-1"> 
                <Image src="/images/shape/motif-point10.png" width="50" height="72"/>  
            </div>
            <div className="slider-shape slider-shape6 shape-zizag"> 
                <Image src="/images/shape/motif-zigzag-violet3.png" width="88" height="19"/> 
            </div>
            <div className="container">
                <div className="bloc-galerie">
                    <div className=" align-items-center">
                        <div className="col-md-5">
                            <div className='image_1'>
                                <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/galerie/img01.jpg`} alt="logo" />
                            </div>
                            <div className='image_2 text-right'>
                                <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/galerie/image02.jpg`} alt="logo" />
                            </div>
                        </div>
                        <div className="col-md-7">
                            <div className='image_3'>
                                <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/galerie/image03.png`} alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>
                <div className="subscribe-area main-banner-area">
                    <div className="slider-shape slider-shape1"> 
                        <Image src="/images/shape/motif-point10.png" width="50" height="72"/>  
                    </div>
                    <div className="slider-shape slider-shape2"> 
                        <Image src="/images/shape/motif-newsletter.png"  width="72" height="31"/>  
                    </div>
                    <div className="slider-shape slider-shape5 shape-zizag"> 
                        <Image src="/images/shape/motif-zigzag-violet3.png" width="88" height="19"/>  
                    </div>
                    <div className="slider-shape slider-shape6 shape-zizag"> 
                        <Image src="/images/shape/motif-zigzag-violet2.png" width="88" height="19"/> 
                    </div>
                    <div className="row align-items-center">
                        <div className="col-lg-12">
                            <h2>Newsletter</h2>
                            <form className="newsletter-form">
                                <input type="email" className="input-newsletter" placeholder="E-mail" name="email" required />
                                <button  className='boutton_primaire' type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Newsletter 