import { FETCH_PARAMS_SITE,PARAMS_ERROR,SET_LOADING_PARAMS } 
from '../types';
import API from '../../utils/API';

export const fetchParamSite = paramName => async dispatch => {
    try {
        const parameters= await API({method: 'get',url: `/configuration?name=${paramName}`}); 
        dispatch({
            type: FETCH_PARAMS_SITE,
            payload: parameters.data
        })
    } catch (err) {
        dispatch({
            type: PARAMS_ERROR,
            payload: err.message
        });
    }
    
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_PARAMS
    };
    
};