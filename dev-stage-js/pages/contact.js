import React from 'react'
import SidebarContactForm from '../containers/SidebarContactForm'
import Navbar from '../containers/Navbar'
import Footer from '../containers/Footer';
import { fetchNavLinks } from '../redux/actions/navBarAction';
import { fetchAllMenu } from '../redux/actions/listNavigationAction';
import { initializeStore } from '../redux/store';
const contact = ({navLinks,listNavigation}) => {
  return (
        <>
            <Navbar NavLinks={navLinks}  allMenu={listNavigation.allListNavigation} isStiky={true} />
            <div className={`sidebar-modal active`}>
            <div className="sidebar-modal-inner">
                <div className="sidebar-about-area">
                    <div className="title">
                        <h2>À propos de nous</h2>
                        <p>Nous croyons que l'interaction avec la marque est la clé de la communication. De vraies innovations et une expérience client positive sont au cœur d'une communication réussie. Pas de faux produits et services. Le client est roi, sa vie et ses besoins sont l'inspiration.</p>
                    </div>
                </div>
                    {/* Sidebar Contact Form */}
                <div className="sidebar-contact-feed">
                    <h2>Contact</h2>
                    <SidebarContactForm />  
                </div>
            </div> 
        </div>
        <Footer bottom={true} />
    </>
  )
}
// const mapStateToPropsContact = ({  navLinksReducer , listNavigationReducer, }) => ({
//     navLinks : navLinksReducer,
//     listNavigation : listNavigationReducer,

// })
// export default withRouter((connect(mapStateToPropsContact, null)(contact))) ;
export async function getStaticProps() {
    const reduxStore = initializeStore()
    const { dispatch, } = reduxStore;
    await dispatch( fetchNavLinks() );
    await dispatch( fetchAllMenu() );
    return{
        props:{
            navLinks : reduxStore.getState().navLinksReducer,
            listNavigation : reduxStore.getState().listNavigationReducer,
        }
    }
}

export default contact;

