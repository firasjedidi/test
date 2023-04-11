import React, { useState} from 'react';


function Barre_recherche({allListFonction,allListDepartement}) {
  const [date1, setDate1]=useState(null);
  const [date2, setDate2]=useState(null);



//console.log(allListDepartement);

    return(
      <div id='barre-recherche'>
        <div className='container'>
            <div className='row' >
              <form className='search-form' >
                <div className='search-form-group select-item-wrapper '>
                  <select defaultValue={1} className="search-form-select bordure">
                    <option value="" selected disabled hidden>Fonction</option>
                    {allListFonction && allListFonction.map((fonctions,index) =>  
                      <option key={index} >{ fonctions.titre} </option>
                      )
                    }
                  
                  </select>
                </div>       
                <div className='search-form-group select-item-wrapper'>
                  <select defaultValue={1}  className="search-form-select bordure">
                    <option value="" selected disabled hidden>Région recherchée</option>
                    {allListDepartement && allListDepartement.map((departements,index)=>  
                    <option key={index} >{departements.titre}</option>
                    )}
                  </select>
                </div>
                <div className='search-form-group date-item-wrapper'>  
                  <input  className="search-form-select bordure" placeholder="Début de stage" type="date"  onChange={(e)=>{setDate1(e.target.value)}}/>
                </div>
                <div className='search-form-group date-item-wrapper'>
                  <input className="search-form-select bordure" placeholder="Fin de stage" type="date" onChange={(e)=>{setDate2(e.target.value)}}/>
                </div >
                <div className='search-form-group button-item-wrapper'>
                  <button className="search-form-select" onClick={e => e.preventDefault()}>Rechercher</button>
                </div> 
              </form>
           </div>
        </div>
      </div>
    )
}

export default Barre_recherche