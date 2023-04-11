import { FETCH_ALL_ENTREPRISE, ENTREPRISE_ERROR, SET_LOADING_ENTREPRISE } from '../types';
import API from '../../utils/API';


export const fetchAllEntreprise = () => async dispatch => {
    try {
        dispatch(setLoading());
        const allEntreprise = await API({ method: 'get', url: `/entreprise` });
        // console.log(allEntreprise);
        dispatch({
            type: FETCH_ALL_ENTREPRISE,
            payload: allEntreprise.data

        })
    } catch (err) {
        dispatch({
            type: ENTREPRISE_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_ENTREPRISE
    };

};