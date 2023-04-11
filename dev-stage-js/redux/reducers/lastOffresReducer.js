import { FETCH_ALL_LAST_OFFRES, LAST_OFFRES_ERROR, SET_LOADING_LAST_OFFRES } from '../types';

const initialState = {
    allLastOffres : null,
    loading : false,
    error : ''
};

export default function lastOffresReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_ALL_LAST_OFFRES:
            return {
                ...state,
                allLastOffres: action.payload,
                loading: true
            };
        case SET_LOADING_LAST_OFFRES:
            return {
                ...state,
                loading: true
            };
        case LAST_OFFRES_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}