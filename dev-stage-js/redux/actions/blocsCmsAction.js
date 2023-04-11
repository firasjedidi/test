import { FETCH_ALL_BLOCS_CMS, LIST_BLOCS_CMS_ERROR, SET_LOADING_BLOCS_CMS } from '../types';
import API from '../../utils/API';
export const fetchBlocCms = (hook) => async dispatch => {
    try {
        dispatch(setLoading());
        const allBlocCms = await API({ method: 'get', url: `/bloc_cms?hook=${hook}` });
        // console.log(homeslides);
        dispatch({
            type: FETCH_ALL_BLOCS_CMS,
            payload: allBlocCms.data

        })
    } catch (err) {
        dispatch({
            type: LIST_BLOCS_CMS_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_BLOCS_CMS
    };

};