import React, { Component } from 'react';
import axios from "axios";
import {htmlToReact} from '../../utils/functions';
//import Slider from "react-slick";


class Actu extends Component {
  // state = {
  //   display: false,
  //   allActus: [],
  // };

  // componentDidMount() {
  //   this.setState({ display: true }),
  //     axios
  //       .get("http://localhost:8000/api/actualite")
  //       .then((response) => {
  //         console.log(response);
  //         this.setState({
  //           allActus: response.data,
  //         });
  //       })
  //       .catch((error) => {
  //         console.log(error);
  //       });
  // }

  sliders() {
    return this.state.allActus.map(allActu => {
        return (
         
            <div key={allActu.id} className="actu-header">
              <img className="actu-img" src={`${process.env.NEXT_Local_URL_IMAGES_FROM_SERVER}/gestion_actualite/${allActu.image}`} />
              <div className="actu-paragra">
                <p className="actu-date">{allActu.date_debut}</p>
                <h4 className="actu-titre">{allActu.titre}</h4>
                <p className="actu-p">{htmlToReact(allActu.courte_description)}</p>   
                <button className="actu-btn btn btn-secondary">En savoir plus</button> 
              </div>
            </div>
          
        )
    });
}

  render() {
    const settings = {
      className: "center",
      centerMode: true,
      infinite: true,
      centerPadding: "60px",
      slidesToShow: 1,
      speed: 500
    };

    return (
      <div className="bg-grey">
        <Slider {...settings}>
            {this.sliders()}
        </Slider>
      </div>
    )
  }
}

export default Actu;
