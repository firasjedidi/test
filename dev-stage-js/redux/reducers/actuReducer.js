import { FETCH_ALL_ACTU, ACTU_ERROR, SET_LOADING_ACTU, } from "../types";

const initialState = {
    allActus: null,
    loading: false,
    error: "",
};

export default function actuReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_ALL_ACTU:
            return {
                ...state,
                allActus: action.payload,
                loading: true,
            };
        case SET_LOADING_ACTU:
            return {
                ...state,
                loading: true,
            };
        case ACTU_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false,
            };
        default:
            return state;
    }

}