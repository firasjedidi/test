import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocPartenaire({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-partenaire');
    return(
        
        <div id="bloc_partenaire">
        
          {itemBlocCMS && itemBlocCMS.map(blocCms => 
            <div className="container">
                
                            <p>{htmlToReact(blocCms.description)}</p>

              
            </div>
           )}  
           
        </div>
        
    )
    
}

export default BlocPartenaire  

/* 
import React, { Component } from 'react';
import { htmlToReact } from '../../utils/functions';
import Slider from "react-slick";


const BlocPartenaire = ({ allBlocCms }) => {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-partenaire');

    return (
        <div id="bloc_partenaire">
            {itemBlocCMS && itemBlocCMS.map(blocCms =>
                <div className="container">
                    <p>{htmlToReact(blocCms.description)}</p>
                </div>
            )}
        </div>
    )
}

export default BlocPartenaire; */