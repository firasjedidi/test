import React, { Component } from 'react';
import {connect} from 'react-redux';
import Head from 'next/head';
import { withRouter } from 'next/router';
import BannerSlider from '../components/Home/BannerSlider';
import BlocService from '../components/Home/BlocService';
import LastOffres from '../components/Home/LastOffres';
import Loader from '../components/Shared/Loader';
import GoTop from '../components/Shared/GoTop';
import Navbar from '../containers/Navbar';
import Footer from '../containers/Footer';
import Barre_recherche from '../containers/Barre_recherche';
import AccueilBloc1 from '../containers/AccueilBloc1';
import { fetchAllLastOffres } from '../redux/actions/lastOffresAction';
import { fetchNavLinks } from '../redux/actions/navBarAction';
import { fetchHomeSlides } from '../redux/actions/homeSlidesAction';
import { fetchParamSite} from '../redux/actions/parametreSiteAction';
import { fetchAllFonction } from '../redux/actions/listFonctionAction';
import { fetchAllDepartement } from '../redux/actions/listDepartementAction';
import { fetchAllMenu } from '../redux/actions/listNavigationAction';
import { fetchBlocCms } from '../redux/actions/blocsCmsAction';
import {getValueOfConfig} from '../utils/functions';
import { initializeStore } from '../redux/store';
import BlocCompose from '../components/Home/BlocCompose';
import BlocConseils from '../components/Home/BlocConseils';
import Newsletter from '../containers/Newsletter';
import BlocEntreprise from '../components/Home/BlocEntreprise';
import { fetchAllEntreprise } from '../redux/actions/entrepriseAction';
import { fetchAllActu } from '../redux/actions/actuAction';
import Actu from '../components/Home/Actu';



 
class Index extends Component {
    // Preloader
    state = {
        loading:true,
        timerHandle:null
    }
    componentDidMount() {
        this.setState({timerHandle: setTimeout(() => this.setState({loading:false}), 200)})
    }
     componentWillUnmount() {
         if (this.state.timerHandle) {
            clearTimeout(this.state.timerHandle);
            this.setState({timerHandle : 0});
         }
     }

     

    renderLastOffresList = (lastOffres) => {
        let lastOffresContent = null; 
        lastOffres.allLastOffres && lastOffres.allLastOffres.length === 0 ? lastOffresContent = <h3 className="m-3 text-center"> Il n' y a pas des offres !!!</h3> : lastOffresContent=null
        lastOffres.allLastOffres && lastOffres.allLastOffres.length >0  
             ? lastOffresContent = (
                       
                         <LastOffres  allLastOffres={lastOffres.allLastOffres}/>
             )
           : lastOffresContent=null
        return lastOffresContent;
    }

    renderListFonction = (listFonction,listDepartement) => {

        let listFonctionsContent = null;
        //console.log(listDepartement); 
        listFonction.allListFonction && listFonction.allListFonction.length === 0 ? listFonctionsContent = <h3 className="m-3 text-center"> Il n' y a pas des offres !!!</h3> : listFonctionsContent=null
        listFonction.allListFonction && listDepartement.allListDepartement && listFonction.allListFonction.length >0  
             ? listFonctionsContent = (           
                <Barre_recherche allListFonction={listFonction.allListFonction} allListDepartement={listDepartement.allListDepartement}/>        
             )
             
           : listFonctionsContent=null
        return listFonctionsContent;
    }

    renderListNavigation = (listNavigation) => {
        let listNavigationsContent = null;
        //console.log(listNavigationsContent); 
        listNavigation.allListNavigation && listNavigation.allListNavigation.length === 0 ? listNavigationsContent = <h3 className="m-3 text-center"> Il n' y a pas des offres !!!</h3> : listNavigationsContent=null
        listNavigation.allListNavigation && listNavigation.allListNavigation.length >0  
             ? listNavigationsContent = (
                       
                <Navbar  allListNavigation={listNavigation.allListNavigation}/>
                        
             )
             
           : listNavigationsContent=null
        return listNavigationsContent;
    }


    renderListBlocCms= (blocCms) => {
        let blocCmsContent = null;
        //console.log(blocCmsContent ); 
        //console.log('---------------------',blocCmsContent );
        blocCms.allBlocCms && blocCms.allBlocCms.length === 0 ? blocCmsContent = <h3 className="m-3 text-center"> Il n' y a pas des offres !!!</h3> : blocCmsContent =null
        blocCms.allBlocCms && blocCms.allBlocCms.length >0  
             ? blocCmsContent  = (
                       
                <AccueilBloc1  allBlocCms={blocCms.allBlocCms}/>
                        
             )
             
           : blocCmsContent =null
        return blocCmsContent ;
    }

    renderListEntreprise= (entreprise) => {
        let entrepriseContent = null;
        //console.log(blocCmsContent ); 
        //console.log('---------------------',blocCmsContent );
        entreprise.allEntreprise && entreprise.allEntreprise.length === 0 ? entrepriseContent = <h3 className="m-3 text-center"> Il n' y a pas des entreprises !!!</h3> : entrepriseContent =null
        entreprise.allEntreprise && entreprise.allEntreprise.length >0  
             ? entrepriseContent  = (     
                <BlocEntreprise allEntreprise={entreprise.allEntreprise}/>
                        
             )
             
           : entrepriseContent = null
        return entrepriseContent ;
    }



    renderListActualite= (actualite) => {
        let actualiteContent = null;
       //console.log(actualiteContent ); 
      // console.log('---------------------',actualiteContent );
        actualite.allActus && actualite.allActus.length === 0 ? actualiteContent = <h3 className="m-3 text-center"> Il n' y a pas des actualités !!!</h3> : actualiteContent =null
        actualite.allActus && actualite.allActus.length >0  
             ? actualiteContent  = (
                       
                <Actu allActus={actualite.allActus}/>
                        
             )
             
           : actualiteContent =null
        return actualiteContent ;
    }

 

    render() {
        const {lastOffres,listFonction,listDepartement,listNavigation,blocCms,entreprise,actualite} = this.props ;

        return (
            <>
                <Head>
                    <title></title>
                    <meta name="titre" content="" />
                    <meta name="description" content="" />
                    <meta name="keywords" content="" />
                    <meta name="author" content="" />
                    <meta name="robots" content=""/> 

                    <meta name="twitter:site" content="" />
                    <meta name="twitter:title" content=""  />
                    <meta name="twitter:description" content=""  />
                    <meta name="twitter:url" content=""  />
                    <meta name="twitter:domain" content=""  />
                    <meta name="twitter:image:src" content=""  />  

                    <meta property="og:title" content=""  />
                    <meta property="og:url" content=""  />
                    <meta property="og:description" content=""  />
                    <meta property="og:site_name" content=""  />
                    <meta property="og:type" content=""  /> 
                    <meta property="og:image" content=""  /> 
                </Head> 
                <Navbar NavLinks={this.props.navLinks}  allMenu={listNavigation.allListNavigation} />
                <BannerSlider HomeSlides={this.props.homeSlides} ParamSites={this.props.parametres}/>
                {this. renderListFonction(listFonction,listDepartement)}
                <AccueilBloc1  allBlocCms={blocCms.allBlocCms} />
                <BlocService  allBlocCms={blocCms.allBlocCms} />
                {this.renderLastOffresList(lastOffres)}
                <BlocCompose  allBlocCms={blocCms.allBlocCms}/>

                <Actu allActus={actualite.allActus}/>

                <BlocConseils allBlocCms={blocCms.allBlocCms}/>
                {/* Preloader */}
                <Loader loading={this.state.loading} />
                {/* Go Top Button */}
                <GoTop scrollStepInPx="100" delayInMs="10.50" />
                <BlocEntreprise  allEntreprise={entreprise.allEntreprise} />
                <Newsletter />
                {this. renderListFonction(listFonction,listDepartement)}
                
                <Footer /> 
            </>
        );
    }
}
const mapStateToProps = ({ lastOffresReducer, navLinksReducer, homeSlidesReducer, parametreSiteReducer, listFonctionReducer , listDepartementReducer , listNavigationReducer, blocsCmsReducer, entrepriseReducer ,  actuReducer }) => ({
    lastOffres : lastOffresReducer,
    navLinks : navLinksReducer,
    homeSlides : homeSlidesReducer,
    parametres: parametreSiteReducer,
    listFonction : listFonctionReducer,
    listDepartement: listDepartementReducer,
    listNavigation : listNavigationReducer,
    blocCms : blocsCmsReducer,
    entreprise : entrepriseReducer,
    actualite :  actuReducer,
})
export default withRouter((connect(mapStateToProps, null)(Index))) ;

export async function getStaticProps() {
    const reduxStore = initializeStore()
    const { dispatch } = reduxStore
    await dispatch( fetchAllLastOffres() ) ;
    await dispatch( fetchNavLinks() ) ;
    await dispatch( fetchHomeSlides() ) ;
    await dispatch( fetchParamSite("homeslider") );
    await dispatch( fetchAllFonction() ) ;
    await dispatch( fetchAllDepartement() ) ;
    await dispatch( fetchAllMenu() ) ;
    await dispatch( fetchBlocCms() ) ;
    await dispatch( fetchAllEntreprise() ) ;
    await dispatch( fetchAllActu() ) ;



return {
    props: { 
        initialReduxState: {
            lastOffresReducer : reduxStore.getState().lastOffresReducer,
            navLinksReducer : reduxStore.getState().navLinksReducer,
            homeSlidesReducer : reduxStore.getState().homeSlidesReducer,
            parametreSiteReducer : reduxStore.getState().parametreSiteReducer,
            listFonctionReducer : reduxStore.getState().listFonctionReducer,
            listDepartementReducer : reduxStore.getState().listDepartementReducer,
            listNavigationReducer : reduxStore.getState().listNavigationReducer,
            blocsCmsReducer : reduxStore.getState().blocsCmsReducer,
            entrepriseReducer : reduxStore.getState().entrepriseReducer,
            actuReducer : reduxStore.getState().  actuReducer,
        },
    },
    //Keep in mind that the timeout revalidator defined here is a timeout for when an incoming request will re-render in the background.
    //Meaning that the first request after the timeout period will serve the previously rendered page and then the page is regenerated in the background.
    revalidate:1
}
    
    
}