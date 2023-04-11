import { FETCH_ALL_LIST_DEPARTEMENT, LIST_DEPARTEMENT_ERROR, SET_LOADING_LIST_DEPARTEMENT } from '../types';

const initialState = {
    allListDepartement: null,
    loading: false,
    error: ''
};

export default function listDepartementReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_ALL_LIST_DEPARTEMENT:
            return {
                ...state,
                allListDepartement: action.payload,
                loading: true,

            };
        case SET_LOADING_LIST_DEPARTEMENT:
            return {
                ...state,
                loading: true
            };
        case LIST_DEPARTEMENT_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}