// import { combineReducers } from 'redux';
import {combineReducers } from '@reduxjs/toolkit'
import lastOffresReducer from './lastOffresReducer';
import navLinksReducer from './navLinksReducer';
import homeSlidesReducer from './homeSlidesReducer';
import parametreSiteReducer from './parametreSiteReducer';
import listFonctionReducer from './listFonctionReducer';
import listDepartementReducer from './listDepartementReducer';
import listNavigationReducer from './listNavigationReducer';
import blocsCmsReducer from './blocsCmsReducer';
import entrepriseReducer from './entrepriseReducer';
import actuReducer from './actuReducer';



export default combineReducers({
    lastOffresReducer,
    navLinksReducer,
    homeSlidesReducer,
    parametreSiteReducer,
    listFonctionReducer,
    listDepartementReducer,
    listNavigationReducer,
    blocsCmsReducer,
    entrepriseReducer,
    actuReducer,

});