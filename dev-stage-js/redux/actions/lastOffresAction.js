import {  FETCH_ALL_LAST_OFFRES, LAST_OFFRES_ERROR, SET_LOADING_LAST_OFFRES } from '../types';
import API from '../../utils/API';
export const fetchAllLastOffres = () => async dispatch => {
    try {
        dispatch(setLoading());
        const allLastOffres = await API({method: 'get',url: `/lastOffres/`});
        //console.log(allLastOffres);
        dispatch({
            type: FETCH_ALL_LAST_OFFRES,
            payload: allLastOffres.data
            
        })
    } catch (err) {
        dispatch({
            type: LAST_OFFRES_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_LAST_OFFRES
    };
    
};