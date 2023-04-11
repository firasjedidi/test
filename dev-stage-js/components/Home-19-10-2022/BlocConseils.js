import React from "react";
import {htmlToReact} from '../../utils/functions';



function BlocConseils({allBlocCms}) {
    const itemBlocCMS = allBlocCms.filter(bloc => bloc.hook == 'bloc-conseils');
    return(

        <div id="bloc_conseils">
          {itemBlocCMS && itemBlocCMS.map(blocCms => 
            <div className="container" key={blocCms.id}>
            {htmlToReact(blocCms.description)}
            </div>
           )}  
        </div>

    )
    
}

export default BlocConseils