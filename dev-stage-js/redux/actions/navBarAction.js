import {  FETCH_NAVLINKS, NAVLINKS_ERROR, SET_LOADING_NAVLINKS } from '../types';
import API from '../../utils/API';
export const fetchNavLinks = () => async dispatch => {
    try {
        dispatch(setLoading());
        const navlinks = await API({method: 'get',url: `/navlinks/`});
       // console.log(navlinks);
        dispatch({
            type: FETCH_NAVLINKS,
            payload: navlinks.data
            
        })
    } catch (err) {
        dispatch({
            type: NAVLINKS_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_NAVLINKS
    };
    
};