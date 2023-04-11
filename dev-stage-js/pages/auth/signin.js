import React ,{useState} from 'react'
import Image from 'next/image';
import Navbar from '../../containers/Navbar'
import Footer from '../../containers/Footer';
import { fetchNavLinks } from '../../redux/actions/navBarAction';
import { fetchAllMenu } from '../../redux/actions/listNavigationAction';
import { initializeStore } from '../../redux/store';
import axios from 'axios';
import { useRouter } from 'next/router'
function SignIn({navLinks,listNavigation}) {
    const [info,setInfo] = useState({ email:"",password:""});

    const handelChange = (event)=>{
        const { name, value} = event.target;
        setInfo(prevState => ({ ...prevState, [name]:  value })); 
    }
    const onSubmit = async(e) => {
        e.preventDefault() 
        const config = {headers:{
            'Access-Control-Allow-Origin': '*',
        }}
        try {
            const res = await axios.post('http://stage-local/api/login/membres',info,config);
            res.data?.res ?  console.log(res) :   console.log( res.data)  ;
            console.log(res);
        } catch (e) {
            console.error(e);  
        } 
    }
  return (
    <>
        <Navbar NavLinks={navLinks}  allMenu={listNavigation.allListNavigation} isStiky={true} />
        <div className="signin-con   ">
            <div className='max-signin  '>
                <div className="slider-shape slider-shape1"> 
                    <Image src="/images/shape/motif-point10.png" width="50" height="72"/>  
                </div>
                <div className="slider-shape slider-shape2"> 
                    <Image src="/images/shape/motif-newsletter.png"  width="72" height="31"/>  
                </div>
                <div className="slider-shape slider-shape5 shape-zizag"> 
                    <Image src="/images/shape/motif-zigzag-violet3.png" width="88" height="19"/>  
                </div>
                <div className="slider-shape slider-shape6 shape-zizag"> 
                    <Image src="/images/shape/motif-zigzag-violet2.png" width="88" height="19"/> 
                </div>
                        
                <h2>SignIn</h2>
                <form className=" " >
                    <input type="email"  onChange={handelChange} placeholder="E-mail" name="email" autoComplete='username'  required />
                    <input type="password" onChange={handelChange}  placeholder="Password" name="password" autoComplete='current-password' required />
                    <button  onClick={onSubmit} >SignIn</button>
                </form>
            </div>
        </div>
        <Footer/>
    </>
  )
}
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
export default SignIn