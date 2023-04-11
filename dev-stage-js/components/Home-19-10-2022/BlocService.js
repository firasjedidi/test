import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocService({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc_services');
    return(

        <div id="bloc_service">
          {itemBlocCMS && itemBlocCMS.map(blocCms => 
            <div className="container-fluid" key={blocCms.id}>
              {htmlToReact(blocCms.description)}
            </div>
           )}  
        </div>

    )
    
}

export default BlocService