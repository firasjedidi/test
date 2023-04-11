import { FETCH_ALL_BLOCS_CMS, LIST_BLOCS_CMS_ERROR, SET_LOADING_BLOCS_CMS } from '../types';

const initialState = {
    allBlocCms: null,
    loading: false,
    error: ''
};

export default function blocsCmsReducer(state = initialState, action) {
    switch (action.type) {
        case FETCH_ALL_BLOCS_CMS:
            return {
                ...state,
                allBlocCms: action.payload,
                loading: true
            };
        case SET_LOADING_BLOCS_CMS:
            return {
                ...state,
                loading: true
            };
        case LIST_BLOCS_CMS_ERROR:
            return {
                ...state,
                error: action.payload,
                loading: false
            };
        default:
            return state;
    }
}