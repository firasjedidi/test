import React,{useState,useEffect} from 'react'
import Image from 'next/image';
import Navbar from '../../containers/Navbar'
import Footer from '../../containers/Footer';
import { fetchNavLinks } from '../../redux/actions/navBarAction';
import { fetchAllMenu } from '../../redux/actions/listNavigationAction';
import { initializeStore } from '../../redux/store';
import { fetchAllFonction } from '../../redux/actions/listFonctionAction';
import { fetchAllDepartement } from '../../redux/actions/listDepartementAction';
import FormData from 'form-data';
import axios from 'axios';
import { useRouter } from 'next/router'
const initialState ={
    type:1,
    civilite:1,
    nom:"",
    prenom:"",
    email:"",
    password:"",
    adresse:"",
    status:false,
    complement_adresse:"",
    code_postal:"",
    inscrit_nl:false,
    permis:false,
    departement_id:1,
    ville_id:"",
    fonction_id:1,
    fax:"",
    tel:"",
    category_id:"",
    raison_social:"",
    effectifs_entreprise:"",
    chiffre_affaire:"",
    site_web:"",
    description:"",
    date_naissance:"",
    nationalite:"",
    photo:"",
    programme_ecole:"",
    titre:""
}
function Register({navLinks,listNavigation,listFonction,listDepartement}) {
    const [tab,setTab] = useState(1);
    const [info,setInfo] = useState(initialState);
    const [viles,setViles] = useState(1);
    const [categorys,setCategorys] = useState([]);
    let formData = new FormData();
     const [image,setImage] = useState("");
     const router = useRouter();
    const handelChange = (event)=>{
        const { name, value ,checked,files} = event.target;
        if (name === "civilite") {
            setInfo(prevState => ({ ...prevState, [name]:  value }));
        }
        else if (name === "photo") {
            setImage(URL.createObjectURL(files[0]))
            setInfo(prevState => ({ ...prevState, [name]:files[0]}));
        }
        else if (name === "permis" || name === "inscrit_nl" || name === "status" ) {
            setInfo(prevState => ({ ...prevState, [name]:  checked ? checked : false  }));
        }else {
           setInfo(prevState => ({ ...prevState, [name]:  value })); 
        } 
    }
    const onSubmit = async(e) => {
        e.preventDefault() 
        const config = {headers:{
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'multipart/form-data'
        }}
        try {
            const res = await axios.post('http://stage-local/api/new/membres',info,config);
            res.data?.error ? alert( res.data?.error) : router.push('/success');
            console.log(res);
        } catch (e) {
            console.error(e);  
        } 
    }

    const onSubmitVile = async() => {
        try {
            const res = await  axios.get(`http://stage-local/api/getVilles?idDepartement=${info.departement_id}`);
            setViles(res.data.villes);
        } catch (e) {
            console.error(e);  
        } 
    }
    
    const onSubmitCategorys= async() => {
        try {
            const res = await  axios.get(`http://stage-local/api/Categorys`);
            const arr = [];
            var r =res.data.categorys.map(item =>{
                var d = JSON.parse(item);
                arr = [...arr,d];
            })
            setCategorys(arr);
        } catch (e) {
            console.error(e);  
        } 
    }

    const deletimg = (e) => {
        e.preventDefault() 
        setImage("")
        setInfo(prevState => ({ ...prevState,photo:"" }));
    }
    console.log(info);
    useEffect(()=>{
      onSubmitCategorys()

    },[])
    useEffect(()=>{
        onSubmitVile()

    },[info.departement_id])
  return (
    <>
        <Navbar NavLinks={navLinks}  allMenu={listNavigation.allListNavigation} isStiky={true} />
        <div className="register-con   ">
            <div className='max-register  '>
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
                    
                <h2>Register</h2>
                <form >
                    {getTab(tab,setTab,handelChange,info,onSubmit,listFonction,listDepartement,deletimg,viles,categorys,image)}
                </form>
            </div>
        </div>
        <Footer/>
    </>
  )
}
const getTab = (tab,setTab,handelChange,info,onSubmit,listFonction,listDepartement,deletimg,viles,categorys,image) => {
    switch (tab) {
        case 1:
          return  <>
                <div className="register-culom   "  >
                    <select  onChange={handelChange}  defaultValue={info.type} name="type" required>
                        <option value={1} >Stagiaire</option>     
                        <option value={2} >Entreprise</option>   
                        <option value={3} >Ecoles/Universités</option>   
                    </select>
                    <input onChange={handelChange} value={info.nom ?info.nom : ""}   type="text" className="" placeholder="Nom" name="nom" required />
                    <input onChange={handelChange} value={info.prenom ?info.prenom : ""}  type="text" className="" placeholder="Prénom" name="prenom" required />
                    <input onChange={handelChange} value={info.email ?info.email : ""} type="email" className="" placeholder="E-mail" name="email" autoComplete="email"   required />
                    <input onChange={handelChange} value={info.password ?info.password : ""}  type="password" className="" placeholder="Password"  autoComplete='new-password' name="password" required />
                    <button onClick={(e)=>{setTab(2);e.preventDefault();}}>Next</button>
                </div>              
            </>
            case 2:
                return   <>
                    <div className="register-culom   ">
                        {info.type == 1 ? 
                            <>
                                <input onChange={handelChange}  type="date" value={info.date_naissance ? info.date_naissance : ""} className="" placeholder="Date de naissance"  min={18} name="date_naissance" required  />
                                <input onChange={handelChange} type="text" value={info.nationalite ? info.nationalite : ""} className="" placeholder="Nationalité" name="nationalite" required />
                            </> 
                            :
                            <>                             
                                <input onChange={handelChange} type="tel" value={info.fax ?info.fax : ""} className="" placeholder="Fax" name="fax" required />
                            </> 
                        }
                        <input onChange={handelChange} type="tel" value={info.tel ? info.tel : ""}  className=""  placeholder="numéro de téléphone" name="tel"required />
                        <div  className='register-label-radio'>
                            <div className='register-label-item'>
                                    <input onChange={handelChange} checked={info.civilite == 1 ? true: false  }  value={1}  id='1' type="radio" name='civilite' />
                                    <label htmlFor="1"> M</label>
                            </div>
                            <div className='register-label-item'>
                                    <input onChange={handelChange} checked={info.civilite == 2 ? true: false  }   value={2}  id='1' type="radio" name='civilite' />
                                    <label htmlFor="1">Mme</label>
                            </div>
                            <div className='register-label-item'>
                                    <input onChange={handelChange}  checked={info.civilite == 3 ? true: false  }   value={3}  id='1' type="radio" name='civilite' />
                                    <label htmlFor="1"> Mlle</label>
                            </div>
                        </div>
                       
                        <div className='register-label'>
                            <div className='register-label-item'>
                                <label className='file' htmlFor="file" >Photo</label>
                                <input onChange={handelChange} className='file' id='file'  style={{display:"none"}}  type="file"  placeholder="photo" name="photo"  /> 
                                {image &&(
                                    <div style={{position:"relative",width:"80px",height:"50px"}}>
                                        <img src={image} style={{width:"80px",height:"50px",margin:"0px 15px"}} />
                                        <button className='reg-abs' onClick={deletimg} >x</button>
                                    </div>
                                )}

                            </div>
                            
                            {   info.type ===1 ?
                                    <div className='register-label-item'>
                                        <label htmlFor="1"> Permis voiture</label>
                                        <input onChange={handelChange}  checked={info.permis} id='1' type="checkbox" name='permis' />
                                    </div>
                                : 
                                null
                            }
                            <div className='register-label-item'>
                                <label  htmlFor="2">Status</label>
                                <input onChange={handelChange} id='2' checked={info.status}   type="checkbox" name='status'  />
                            </div>
                            <div className='register-label-item'>
                                <label className='shrink' htmlFor="3">Je désire être tenu au courant de l'actualité de Stage.Tn</label>
                                <input onChange={handelChange}  checked={info.inscrit_nl } id='3'   type="checkbox"  name='inscrit_nl'/>
                            </div>
                            
                        </div>
                    </div>
                    <div className='register-btn'>
                        <button onClick={(e)=>{setTab(1);e.preventDefault()}}>Prev</button>
                        <button onClick={(e)=>{setTab(3);e.preventDefault()}}>Next</button>
                    </div>
                </>
            case 3:
                return   <>
                    <div className="register-culom   ">
                        <input onChange={handelChange} value={info.adresse ?info.adresse : ""}   type="text" className="" placeholder="Adresse" name="adresse" required  />
                        <input onChange={handelChange} value={info.complement_adresse ?info.complement_adresse : ""}   type="text" className="" placeholder="Complément d'adresse" name="complement_adresse"  required />
                        <input onChange={handelChange} value={info.code_postal ? info.code_postal : ""}  type="text" className="" placeholder="Code postal" name="code_postal" required />
                        <select defaultValue={info.departement_id}  onChange={handelChange}   name="departement_id" >
                            <option value="" selected disabled hidden>Région recherchée</option>
                            {listDepartement.allListDepartement && listDepartement.allListDepartement.map((departements,index)=>  
                                 <option key={index} value={departements.id} >{departements.titre}</option>
                                )
                            }
                            
                        </select>
                        
                        {info.type == 1 ?
                           <select  defaultValue={info.ville_id}  onChange={handelChange}   name="ville_id" >
                                <option value="" selected disabled hidden>ville recherchée</option>
                                {viles && viles.map((departements,index)=>  
                                        <option key={index} value={departements.id} >{departements.titre}</option>
                                    )
                                }
                            </select>
                            :
                            null
                        }
                    </div>
                    <div className='register-btn'>
                        <button onClick={(e)=>{setTab(2);e.preventDefault()}}>Prev</button>
                        {info.type == 2 || info.type == 3?  
                            <button  className='' onClick={(e)=>{setTab(4);e.preventDefault()}}>next</button>
                        :
                            <button  className='' onClick={onSubmit} >Register</button>
                        }
                    </div>
                   
                </>
            case 4:
                return   <>
                    <div className="register-culom   ">
                        <select  defaultValue={info.ville_id}  onChange={handelChange}   name="ville_id" >
                            <option value="" selected disabled hidden>ville recherchée</option>
                            {viles && viles.map((departements,index)=>  
                                <option key={index} value={departements.id} >{departements.titre}</option>
                             )}
                        </select>
                      
                         {info.type == 2 ? 
                            <>
                                <input onChange={handelChange}  value={info.raison_social ? info.raison_social : ""}    type="text" className="" placeholder="Raison sociale" name="raison_social" required />
                                <input onChange={handelChange}  value={info.effectifs_entreprise ? info.effectifs_entreprise : ""}   type="text" className="" placeholder="Effectifs" name="effectifs_entreprise" required  />
                                <input onChange={handelChange}  value={info.chiffre_affaire ? info.chiffre_affaire : ""}  type="text" className="" placeholder="Chiffre d'affaires" name="chiffre_affaire" required  />
                                <select defaultValue={info.departement_id}  onChange={handelChange}   name="category_id" >
                                    <option value="" selected disabled hidden>Category </option>
                                    {categorys && categorys.map((departements,index)=>  
                                        <option key={index} value={departements.id} >{departements.titre}</option>
                                        )
                                    }
                                    
                                </select>
                            </>
                            :
                            <>
                                 <select defaultValue={info.departement_id}  onChange={handelChange}   name="category_id" >
                                 <option value="" selected disabled hidden>Category</option>
                                    {categorys && categorys.map((departements,index)=>  
                                        <option key={index} value={departements.id} >{departements.titre}</option>
                                        )
                                    }
                                    
                                </select>
                                <input onChange={handelChange}  value={info.titre ? info.titre : ""}    type="text" className="" placeholder="Nom de l'école" name="titre" required  />
                                <input onChange={handelChange}  value={info.site_web ? info.site_web : ""}   type="text" className="" placeholder="Site web" name="site_web"  required />
                              
                            </>
                        }
                    </div>
                    <div className='register-btn'>
                        <button onClick={(e)=>{setTab(3);e.preventDefault()}}>Prev</button>
                        {info.type == 2 || info.type == 3 ?  
                            <button  className='' onClick={(e)=>{setTab(5);e.preventDefault()}}>next</button>
                        :
                            <button  className='' onClick={onSubmit} >Register</button>
                        }
                    </div>
                   
                </>
             case 5:
                return   <>
                    <div className="register-culom   ">
                        {info.type == 2 ?
                            <>
                                <select defaultValue={info.fonction_id} name="fonction_id"onChange={handelChange}  >   
                                    <option value="" selected disabled hidden>Fonction</option>
                                    {listFonction.allListFonction && listFonction.allListFonction.map((fonctions,index) =>  
                                            <option key={index} value={ fonctions.id} >{ fonctions.titre} </option>
                                        )
                                    } 
                                </select> 
                               
                                <input onChange={handelChange}  value={info.site_web ? info.site_web : ""}   type="url" className="" placeholder="Site web" name="site_web"  />
                                <textarea onChange={handelChange} value={info.description ? info.description : ""}   placeholder="Présentation de l'entreprise" name="description" ></textarea>
                            </> 
                            : 
                            <>
                                <textarea onChange={handelChange} value={info.description ? info.description : ""}   placeholder="Présentation " name="description" required ></textarea>
                                <textarea onChange={handelChange} value={info.programme_ecole ? info .programme_ecole : ""}   placeholder='Programme' name="programme_ecole" required ></textarea>
                            </>
                        }      
                      
                    </div>
                    <div className='register-btn'>
                        <button onClick={(e)=>{setTab(4);e.preventDefault()}}>Prev</button>
                        <button  className='' onClick={onSubmit} >Register</button>
                    </div>
                   
                </>              
        default:
            return <>
                <div className="register-culom   ">
                    <select defaultValue={info.type}>
                        <option value={1} >Stagiaire</option>     
                        <option value={2} >Entreprise</option>   
                        <option value={3} >Ecoles/Universités</option>   
                    </select>
                    <input onChange={handelChange} value={info.nom ?info.nom : ""}    type="text" className="" placeholder="Nom" name="nom" required />
                    <input onChange={handelChange} value={info.prenom ?info.prenom : ""}     type="text" className="" placeholder="Prénom" name="prenom" required />
                    <input onChange={handelChange} value={info.email ?info.email : ""}     type="email" className="" placeholder="E-mail" name="email" autocomplete="email"   required />
                    <input onChange={handelChange} value={info.password ?info.password : ""}    type="password" className="" placeholder="Password" autoComplete='new-password' name="password" required />
                </div>
                <button onClick={(e)=>{setTab(2);e.preventDefault()}}>Next</button>
            </>
            
    }
  }
export async function getStaticProps() {
    const reduxStore = initializeStore()
    const { dispatch } = reduxStore;
    await dispatch( fetchNavLinks() );
    await dispatch( fetchAllMenu() );
    await dispatch( fetchAllFonction() ) ;
    await dispatch( fetchAllDepartement() ) ;
    
    return{
        props:{
            navLinks : reduxStore.getState().navLinksReducer,
            listNavigation : reduxStore.getState().listNavigationReducer,
            listFonction :  reduxStore.getState().listFonctionReducer,
            listDepartement: reduxStore.getState().listDepartementReducer,
           
        }
    }
}

export default Register