import { FETCH_ALL_ACTU, ACTU_ERROR, SET_LOADING_ACTU, } from "../types";
import API from "../../utils/API";


export const fetchAllActu = () => async(dispatch) => {
    try {
        dispatch(setLoading());
        const allActus = await API({ method: "get", url: `/actualite` });
        // console.log(allActus.data);
        dispatch({
            type: FETCH_ALL_ACTU,
            payload: allActus.data,
        });
    } catch (err) {
        dispatch({
            type: ACTU_ERROR,
            payload: err.message,
        });
    }
};

// Set loading to true
export const setLoading = () => {
    return {
        type: SET_LOADING_ACTU,
    };
};