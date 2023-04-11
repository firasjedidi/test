import { FETCH_ALL_ENTREPRISE, ENTREPRISE_ERROR, SET_LOADING_ENTREPRISE } from '../types';

const initialState = {
    allEntreprise: null,
    loading: false,
    error: false
};

export default function entrepriseReducer(state = initialState, action) {

    switch (action.type) {
        case FETCH_ALL_ENTREPRISE:
            return {
                ...state,
                allEntreprise: action.payload,
                loading: true
            };
        case SET_LOADING_ENTREPRISE:
            return {
                ...state,
                loading: true
            };
        case ENTREPRISE_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}