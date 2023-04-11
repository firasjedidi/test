import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocService({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc_services');
    return(
        <div id="bloc_service">
          {itemBlocCMS && itemBlocCMS.map((blocCms,index) => 
            <div className="container-fluid" key={index}>
              {htmlToReact(blocCms.description)}
            </div>
           )}  
        </div>

    )
    
}

export default BlocService