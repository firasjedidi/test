import React from "react";
import {htmlToReact} from '../utils/functions';
import Image from 'next/image';
import shape1 from '../assets/images/motif-point06.png'
import shape2 from '../assets/images/motif-point09.png'
import zigzagbl from '../assets/images/motif-zigzag-gris.png'

function AccueilBloc1({allBlocCms}) {   
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-presentation');
    return(
        <div id="bloc1" className="main-banner-area presentation">
            <div className="slider-shape slider-shape1"> 
                <Image src={shape1} width="198" height="74"/>  
            </div>
            <div className="slider-shape slider-shape2"> 
                <Image src={shape2} width="50" height="163"/>  
            </div>
            <div className="slider-shape slider-shape5 shape-zizag"> 
                <Image src={zigzagbl} width="88" height="19"/>  
            </div>
              {/* <p>{blocCms.id(2) && blocCms.description}</p> */}
            {itemBlocCMS && itemBlocCMS.map((blocCms,index) => 
                <div className="container" key={index}>
                    <div className="row">
                        <div  className="col-lg-6 col-12 order-lg-1 order-2">
                            <div className="contenu-bloc1">
                                {htmlToReact(blocCms.description)}
                            </div>
                        </div>
                        <div className="col-lg-6 col-12 order-lg-2 order-1">
                            <div className="image-bloc1">
                                <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/blocCms/${blocCms.image}`} className="image-presentation" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            )}      
        </div>
    )
    
}

export default AccueilBloc1