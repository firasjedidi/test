import { FETCH_ALL_LIST_NAVIGATION, LIST_NAVIGATION_ERROR, SET_LOADING_LIST_NAVIGATION } from '../types';
import API from '../../utils/API';


export const fetchAllMenu = () => async dispatch => {
    try {
        dispatch(setLoading());
        const allMenu = await API({ method: 'get', url: `/menu/` });
        // console.log(allMenu);
        dispatch({
            type: FETCH_ALL_LIST_NAVIGATION,
            payload: allMenu.data

        })
    } catch (err) {
        dispatch({
            type: LIST_NAVIGATION_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_LIST_NAVIGATION
    };

};