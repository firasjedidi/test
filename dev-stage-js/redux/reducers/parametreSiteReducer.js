import { FETCH_PARAMS_SITE,PARAMS_ERROR,SET_LOADING_PARAMS } 
from '../types';

const initialState = {
parameters: [],
loading : false,
error : '',
settingsComponent:null,
};

export default function parametreSiteReducer(state = initialState, action) {
switch (action.type) {
    case FETCH_PARAMS_SITE:
        return {
            ...state,
            parameters: action.payload,
            loading: false
        };
    case SET_LOADING_PARAMS:
        return {
            ...state,
            loading: true
        };
    case PARAMS_ERROR:
        return {
            ...state,
            error: action.payload,
            loading: false
        };
    default:
        return state;
}
}