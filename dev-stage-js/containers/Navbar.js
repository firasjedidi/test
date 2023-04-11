import React, { Component } from 'react';
import { connect } from 'react-redux';
import listNavigationReducer from '../redux/reducers/listNavigationReducer';
import Link from '../utils/ActiveLink';

class Navbar extends Component {  
    // Search Form
    state = {
        searchForm: false,
    };
    handleSearchForm = () => {
        this.setState( prevState => {
            return {
                searchForm: !prevState.searchForm
            };
        });
    }
    // Navbar
    _isMounted = false;
    state = {
        display: false,
        collapsed: true,
        sticky:false,
    };
    toggleNavbar = () => {
        this.setState({
            collapsed: !this.state.collapsed,
        });
    }
    componentDidMount() {
        let elementId = document.getElementById("navbar");       
        if (this.props.isStiky) {
            elementId.classList.add("is-sticky");
            this.setState({ sticky:true})
        } else{
            document.addEventListener("scroll", () => {
                if (window.scrollY > 170) {
                    elementId.classList.add("is-sticky");
                    this.setState({ sticky:true})
                } else {
                    elementId.classList.remove("is-sticky");  
                    this.setState({ sticky:false})               
                }
            });
            window.scrollTo(0, 0);
        }            
    }     
    componentWillUnmount() {     
        this._isMounted = false;
    }
    render() {
        let { allMenu } = this.props;
        const { collapsed ,sticky} = this.state;
        const classOne = collapsed ? 'collapse navbar-collapse' : 'collapse navbar-collapse show';
        const classTwo = collapsed ? 'navbar-toggler navbar-toggler-right collapsed' : 'navbar-toggler navbar-toggler-right';
           
        return (
            <>
               <div id="navbar" className="navbar-area fixed-top navbar-two">           
                    <nav className="navbar navbar-expand-md">
                        <div className="container">
                            <Link href="/">
                                <a className="navbar-brand">
                                    {sticky ? 
                                        <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/logo_2.png`} alt="logo" /> 
                                        :
                                        <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/logo.png`} alt="logo" />  
                                    }                                
                                </a>
                            </Link>
                            <button 
                                onClick={this.toggleNavbar} 
                                className={classTwo}
                                type="button" 
                                data-toggle="collapse" 
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                                aria-expanded="false" 
                                aria-label="Toggle navigation"
                            >
                                <span className="icon-bar top-bar"></span>
                                <span className="icon-bar middle-bar"></span>
                                <span className="icon-bar bottom-bar"></span>
                            </button>
                            <div className={classOne} id="navbarSupportedContent">
                                <ul className="navbar-nav">
                                    {allMenu && allMenu.map((listNavigation,index) => 
                                        <li className="nav-item" key={index}> 
                                            {listNavigation.titre === "Accueil" 
                                                ? 
                                                <Link href={`/`} activeClassName="active">
                                                    {/*  onClick={e => e.preventDefault()} */}
                                                    <a className="nav-link">
                                                        {listNavigation.titre}
                                                    </a>
                                                </Link>
                                                :
                                                <Link href={`/${listNavigation.titre.toLowerCase()}`} activeClassName="active">
                                                    {/*  onClick={e => e.preventDefault()} */}
                                                    <a className="nav-link">
                                                        {listNavigation.titre}
                                                    </a>
                                                </Link>
                                            }                                     
                                            {listNavigation.child != '' &&   
                                                <ul className="dropdown-menu">
                                                    {listNavigation.child.map((child, i)=> 
                                                        <li className="nav-item" key={i}>
                                                            <Link href="/" activeClassName="active">
                                                                <a className="nav-link" onClick={e => e.preventDefault()}>
                                                                    {child.titre}
                                                                </a>
                                                            </Link>
                                                        </li>
                                                    )}
                                                </ul>
                                            }  
                                        </li>
                                    )}
                                </ul>
                            </div>
                            <div className="others-options">
                                <Link href="/auth/signin">
                                    <a className="connect signin fas fa-user fa-fw">Mon compte</a>
                                </Link>
                                <Link href="/auth/register">
                                    <a className="connect register fas fa-user fa-fw">S'inscrire</a>
                                </Link>
                            </div>
                        </div>
                    </nav>
                </div>
            </>   
        );
    }
}

export default Navbar   











///////////////////////////////////////old//////////////////////////////////////////////

/*
class Navbar extends Component {

    // Search Form
    state = {
        searchForm: false,
    };
    handleSearchForm = () => {
        this.setState( prevState => {
            return {
                searchForm: !prevState.searchForm
            };
        });
    }

    // Navbar
    _isMounted = false;
    state = {
        display: false,
        collapsed: true
    };
    toggleNavbar = () => {
        this.setState({
            collapsed: !this.state.collapsed,
        });
    }
    componentDidMount() {
        let elementId = document.getElementById("navbar");
        document.addEventListener("scroll", () => {
            if (window.scrollY > 170) {
                elementId.classList.add("is-sticky");
            } else {
                elementId.classList.remove("is-sticky");
            }
        });
        window.scrollTo(0, 0);
    }
    componentWillUnmount() {
        this._isMounted = false;
    }

    render() {
        let { products } = this.props;
        const { collapsed } = this.state;
        const classOne = collapsed ? 'collapse navbar-collapse' : 'collapse navbar-collapse show';
        const classTwo = collapsed ? 'navbar-toggler navbar-toggler-right collapsed' : 'navbar-toggler navbar-toggler-right';

        return (
            <>
               <div id="navbar" className="navbar-area fixed-top navbar-two">
                    <nav className="navbar navbar-expand-md">
                        <div className="container">
                            <Link href="/">
                                <a className="navbar-brand">
                                    <img src={`${process.env.NEXT_PUBLIC_URL_IMAGES_FROM_SERVER}/logo.png`} alt="logo" />
                                </a>
                            </Link>

                            <button 
                                onClick={this.toggleNavbar} 
                                className={classTwo}
                                type="button" 
                                data-toggle="collapse" 
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                                aria-expanded="false" 
                                aria-label="Toggle navigation"
                            >
                                <span className="icon-bar top-bar"></span>
                                <span className="icon-bar middle-bar"></span>
                                <span className="icon-bar bottom-bar"></span>
                            </button>

                            <div className={classOne} id="navbarSupportedContent">
                                <ul className="navbar-nav">
                                    <li className="nav-item">
                                        <Link href="/#" activeClassName="active">
                                            <a className="nav-link" onClick={e => e.preventDefault()}>
                                                Home <i className='bx bx-chevron-down'></i>
                                            </a>
                                        </Link>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <Link href="/" activeClassName="active">
                                                    <a className="nav-link">Home One</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index2" activeClassName="active">
                                                    <a className="nav-link">Home Two</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index3" activeClassName="active">
                                                    <a className="nav-link">Home Three</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index4" activeClassName="active">
                                                    <a className="nav-link">Home Four</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index5" activeClassName="active">
                                                    <a className="nav-link">Home Five </a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index6" activeClassName="active">
                                                    <a className="nav-link">Home Six</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index7" activeClassName="active">
                                                    <a className="nav-link">Home Seven</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/index8" activeClassName="active">
                                                    <a className="nav-link">Home Eight</a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/about" activeClassName="active">
                                            <a className="nav-link">About</a>
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/#" activeClassName="active">
                                            <a className="nav-link" onClick={e => e.preventDefault()}>
                                                Services <i className='bx bx-chevron-down'></i>
                                            </a>
                                        </Link>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <Link href="/services" activeClassName="active">
                                                    <a className="nav-link">Services Style One</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/services2" activeClassName="active">
                                                    <a className="nav-link">Services Style Two</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/service-details" activeClassName="active">
                                                    <a className="nav-link">
                                                        Service Details
                                                    </a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/#">
                                            <a className="nav-link" onClick={e => e.preventDefault()}>
                                                Projects <i className='bx bx-chevron-down'></i>
                                            </a>
                                        </Link>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <Link href="/projects" activeClassName="active">
                                                    <a className="nav-link">Projects Style One</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/projects2" activeClassName="active">
                                                    <a className="nav-link">Projects Style Two</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/project-details" activeClassName="active">
                                                    <a className="nav-link">
                                                        Project Details
                                                    </a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/#">
                                            <a className="nav-link" onClick={e => e.preventDefault()}>
                                                Pages <i className='bx bx-chevron-down'></i>
                                            </a>
                                        </Link>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <Link href="/team" activeClassName="active">
                                                    <a className="nav-link">Team</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/pricing" activeClassName="active">
                                                    <a className="nav-link">Pricing</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/faq" activeClassName="active">
                                                    <a className="nav-link">FAQ</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/#">
                                                    <a className="nav-link" onClick={e => e.preventDefault()}>
                                                        User <i className='bx bx-chevron-down'></i>
                                                    </a>
                                                </Link>
                                                <ul className="dropdown-menu">
                                                    <li className="nav-item">
                                                        <Link href="/signin" activeClassName="active">
                                                            <a className="nav-link">Sign In</a>
                                                        </Link>
                                                    </li>
                                                    <li className="nav-item">
                                                        <Link href="/signup" activeClassName="active">
                                                            <a className="nav-link">Sign Up</a>
                                                        </Link>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li className="nav-item">
                                                <Link href="/404" activeClassName="active">
                                                    <a className="nav-link">404 Error Page</a>
                                                </Link>
                                            </li>
                                            
                                            <li className="nav-item">
                                                <Link href="/coming-soon" activeClassName="active">
                                                    <a className="nav-link">Coming Soon</a>
                                                </Link>
                                            </li>
                                            
                                            <li className="nav-item">
                                                <Link href="/terms-conditions" activeClassName="active">
                                                    <a className="nav-link">Terms & Conditions</a>
                                                </Link>
                                            </li>

                                            <li className="nav-item">
                                                <Link href="/privacy-policy" activeClassName="active">
                                                    <a className="nav-link">Privacy Policy</a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/#">
                                            <a className="nav-link" onClick={e => e.preventDefault()}>
                                                Blog <i className='bx bx-chevron-down'></i>
                                            </a>
                                        </Link>
                                        <ul className="dropdown-menu">
                                            <li className="nav-item">
                                                <Link href="/blog" activeClassName="active">
                                                    <a className="nav-link">Blog Grid</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/blog2" activeClassName="active">
                                                    <a className="nav-link">Blog Right Sidebar</a>
                                                </Link>
                                            </li>
                                            <li className="nav-item">
                                                <Link href="/blog-details" activeClassName="active">
                                                    <a className="nav-link">Blog Details</a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </li>

                                    <li className="nav-item">
                                        <Link href="/contact" activeClassName="active">
                                            <a className="nav-link">Contact</a>
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div className="others-options">
                                <Link href="/signin">
                                    <a className="connect signin fas fa-user fa-fw">Mon compte</a>
                                </Link>
                                <Link href="/register">
                                    <a className="connect register fas fa-user fa-fw">S'inscrire</a>
                                </Link>
                            </div>
                        </div>
                    </nav>
                </div>
            </>
        );
    }
}

export default Navbar*/











 



