import React from 'react'
import FeaturedSolutions from '../components/Home/FeaturedSolutions'
import Portfolio from '../components/Home/Portfolio'
import SidebarContactForm from '../containers/SidebarContactForm'
import SidebarModal from '../containers/SidebarModal'
import ServiceOverview from '../components/Home/ServiceOverview'
import SmartApproach from '../components/Home/SmartApproach'
import FaqsContent from '../components/Faqs/FaqsContent'
import PricingCard from '../components/Pricing/PricingCard'
import BlogPost from '../components/Common/BlogPost'
import DigitalExperience from '../components/Common/DigitalExperience'
import FeedbackStyleOne from '../components/Common/FeedbackStyleOne'
import FeedbackStyleTwo from '../components/Common/FeedbackStyleTwo'
import FunFacts from "../components/Common/FunFacts";
import FunFactsStyleTwo from "../components/Common/FunFactsStyleTwo";
import PageBanner from "../components/Common/PageBanner";
import PartnerStyleOne from "../components/Common/PartnerStyleOne";
import Subscribe from "../components/Common/Subscribe";
import TeamStyleOne from "../components/Common/TeamStyleOne";
import TeamStyleTwo from "../components/Common/TeamStyleTwo";
import Link from 'next/link';
import Navbar from '../containers/Navbar';
import Footer from '../containers/Footer';
import { fetchNavLinks } from '../redux/actions/navBarAction';
import { fetchAllMenu } from '../redux/actions/listNavigationAction';
import { initializeStore } from '../redux/store';

export default function test({navLinks,listNavigation}) {
  return (
    <div className='w-full h-full'>
      <Navbar NavLinks={navLinks}  allMenu={listNavigation.allListNavigation} isStiky={true} />
      <div className=" register-succses-msg ">
        <p className=' text-lg'>Merci d'avoir pris le temps de vous inscrire avec nous</p>
        <Link href="/">
          <a >Revenir en accueil</a>
        </Link>      
      </div>
      <Footer/>
    </div>
  )
}
export async function getStaticProps() {
  const reduxStore = initializeStore()
  const { dispatch } = reduxStore;
  await dispatch( fetchNavLinks() );
  await dispatch( fetchAllMenu() );  
  return{
      props:{
        navLinks : reduxStore.getState().navLinksReducer,
        listNavigation : reduxStore.getState().listNavigationReducer,
      }
  }
}