import { FETCH_ALL_LIST_NAVIGATION, LIST_NAVIGATION_ERROR, SET_LOADING_LIST_NAVIGATION } from '../types';

const initialState = {
    allListNavigation: null,
    loading: false,
    error: false
};

export default function listNavigationReducer(state = initialState, action) {

    switch (action.type) {
        case FETCH_ALL_LIST_NAVIGATION:
            return {
                ...state,
                allListNavigation: action.payload,
                loading: true
            };
        case SET_LOADING_LIST_NAVIGATION:
            return {
                ...state,
                loading: true
            };
        case LIST_NAVIGATION_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}