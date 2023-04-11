import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocCompose({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc_compose');
    return(

        <div id="bloc_compose">
          {itemBlocCMS && itemBlocCMS.map(blocCms => 
            <div className="container-fluid"  key={blocCms.id}>   
            {htmlToReact(blocCms.description)}   
            </div>
           )}  
        </div>

    )
    
}

export default BlocCompose