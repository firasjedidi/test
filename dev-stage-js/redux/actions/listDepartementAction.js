import { FETCH_ALL_LIST_DEPARTEMENT, LIST_DEPARTEMENT_ERROR, SET_LOADING_LIST_DEPARTEMENT } from '../types';
import API from '../../utils/API';
export const fetchAllDepartement = () => async dispatch => {
    try {
        dispatch(setLoading());
        const allListDepartement = await API({ method: 'get', url: `/departements/` });
        //console.log(allDepartement.data);
        dispatch({
            type: FETCH_ALL_LIST_DEPARTEMENT,
            payload: allListDepartement.data

        })
    } catch (err) {
        dispatch({
            type: LIST_DEPARTEMENT_ERROR,
            payload: err.message
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_LIST_DEPARTEMENT
    };

};