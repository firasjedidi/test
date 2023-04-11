import App from 'next/app';
import { Provider } from "react-redux";
import '../assets/css/bootstrap.min.css';
import '../assets/css/animate.min.css';
import '../assets/css/flaticon.css';
import '../assets/css/boxicons.min.css';
import '../assets/css/fontawesome.min.css';
import '../node_modules/react-modal-video/css/modal-video.min.css';
import 'react-accessible-accordion/dist/fancy-example.css';
import '../assets/css/style.css';
import '../assets/css/responsive.css';
import Loader from '../components/Shared/Loader';
import GoTop from '../components/Shared/GoTop';
import {useStore} from '../redux/store';

const MyApp = ({Component, pageProps}) => {
    const store = useStore(pageProps.initialReduxState)
    return(
        <Provider store={store}>
            <Component {...pageProps} />
        </Provider>
    )
};

export default MyApp;