import { FETCH_ALL_LIST_FONCTION, LIST_FONCTION_ERROR, SET_LOADING_LIST_FONCTION } from '../types';
import API from '../../utils/API';


export const fetchAllFonction = () => async dispatch => {
    try {
        dispatch(setLoading());
        const allListFonction = await API({ method: 'get', url: `/fonction` });
        // console.log(allListFonction);
        dispatch({
            type: FETCH_ALL_LIST_FONCTION,
            payload: allListFonction.data

        })
    } catch (err) {
        dispatch({
            type: LIST_FONCTION_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_LIST_FONCTION
    };

};