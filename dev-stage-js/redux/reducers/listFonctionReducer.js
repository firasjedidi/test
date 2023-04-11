import { FETCH_ALL_LIST_FONCTION, LIST_FONCTION_ERROR, SET_LOADING_LIST_FONCTION } from '../types';

const initialState = {
    allListFonction: null,
    loading: false,
    error: false
};

export default function listFonctionReducer(state = initialState, action) {

    switch (action.type) {
        case FETCH_ALL_LIST_FONCTION:
            return {
                ...state,
                allListFonction: action.payload,
                loading: true
            };
        case SET_LOADING_LIST_FONCTION:
            return {
                ...state,
                loading: true
            };
        case LIST_FONCTION_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}