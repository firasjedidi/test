import { FETCH_HOMESLIDES, HOMESLIDES_ERROR, SET_LOADING_HOMESLIDES } from '../types';

const initialState = {
    homeSlides : null,
    loading : false,
    error : ''
};

export default function homeSlidesReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_HOMESLIDES:
            return {
                ...state,
                homeSlides: action.payload,
                loading: true
            };
        case SET_LOADING_HOMESLIDES:
            return {
                ...state,
                loading: true
            };
        case HOMESLIDES_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}