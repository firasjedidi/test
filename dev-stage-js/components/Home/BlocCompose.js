import React from "react";
import {htmlToReact} from '../../utils/functions';
import Image from 'next/image';
import zigzagvi from '../../assets/images/motif-zigzag-violet1.png'
import zigzagvi2 from '../../assets/images/motif-zigzag-violet2.png'
import shape1 from '../../assets/images/motif-point06.png'
import shape2 from '../../assets/images/motif-point10.png'
import shape4 from '../../assets/images/motif-point07.png'
function BlocCompose({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc_compose');
    return(

        <div id="bloc_compose"  className="main-banner-area compose">
            <div className="slider-shape slider-shape1"> 
                <Image src={shape1} width="198" height="74"/>  
            </div>
            <div className="slider-shape slider-shape2 shape-zizag"> 
                <Image src={zigzagvi2} width="88" height="19"/>  
            </div>
            <div className="slider-shape slider-shape3"> 
             <Image src={shape4} width="51" height="163"/>  
            </div>
            <div className="slider-shape slider-shape4"> 
                <Image src={shape2} width="50" height="72"/>  
            </div>
            <div className="slider-shape slider-shape5 shape-zizag"> 
                <Image src={zigzagvi}width="88" height="19"/>  
            </div>
            <div className="slider-shape slider-shape6 shape-zizag"> 
                <Image src={shape1} width="88" height="19"/> 
            </div>
          {itemBlocCMS && itemBlocCMS.map((blocCms,index) => 
            <div className="container-fluid" key={index}>
                {htmlToReact(blocCms.description)}
            </div>
           )}  
        </div>

    )
    
}

export default BlocCompose