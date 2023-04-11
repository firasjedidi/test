import { FETCH_NAVLINKS, NAVLINKS_ERROR, SET_LOADING_NAVLINKS } from '../types';

const initialState = {
    navLinks : null,
    loading : false,
    error : ''
};

export default function navLinksReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_NAVLINKS:
            return {
                ...state,
                navLinks: action.payload,
                loading: true
            };
        case SET_LOADING_NAVLINKS:
            return {
                ...state,
                loading: true
            };
        case NAVLINKS_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}