import React from 'react';
import Link from 'next/link';
import { htmlToReact } from '../../utils/functions';

function LastOffres({allLastOffres}) {
    return (
        <div id='last_offres'>
        <section className="bg-color pt-100 pb-70" >
            <div className="container">
                
                <div className="row">
                    <h2>Les dernières offres de stages</h2>
                    {allLastOffres.map(offre => 
                        <div key={offre.id} className="col-lg-4 col-md-6">
                            <div className="single-services" style={{height: '355px'}}>
                                <div className="icon">
                                    <i className="flaticon-it"></i>
                                </div>
                                <h3>{offre.titre}</h3>
                                
                            </div>
                        </div>
                    )}
                </div>
            </div>
        </section>
        </div>
    );
}

export default LastOffres
