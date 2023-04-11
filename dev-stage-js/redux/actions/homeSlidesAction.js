import {  FETCH_HOMESLIDES, HOMESLIDES_ERROR, SET_LOADING_HOMESLIDES } from '../types';
import API from '../../utils/API';
export const fetchHomeSlides = () => async dispatch => {
    try {
        dispatch(setLoading());
        const homeslides = await API({method: 'get',url: `/homeslider/`});
       // console.log(homeslides);
        dispatch({
            type: FETCH_HOMESLIDES,
            payload: homeslides.data
            
        })
    } catch (err) {
        dispatch({
            type: HOMESLIDES_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_HOMESLIDES
    };
    
};