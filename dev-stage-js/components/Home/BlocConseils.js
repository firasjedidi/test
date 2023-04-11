import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocConseils({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-conseils');
   
    return(

        <div id="bloc_conseils">
          {itemBlocCMS && itemBlocCMS.map((blocCms,index) => 
            <div className="container" key={index}>
               <>{htmlToReact(blocCms.description)}</>
            </div>
           )}  
        </div>

    )
    
}

export default BlocConseils