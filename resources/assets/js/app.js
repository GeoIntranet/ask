
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('es6-promise').polyfill();
window.axios = require('axios');
window._ = require('lodash');

window.Laravel = {
    csrfToken: $('meta[name=csrf-token]').attr("content"),
    user: $('meta[name=user]').attr("content")
};
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.Vue = require('vue');

window.Event = new Vue();
import Multiselect from 'vue-multiselect'

// register globally
Vue.component('multiselect', Multiselect)
Vue.component('search', require('./components/SearchComponent'));
Vue.component('responses', require('./components/Responses'));
Vue.component('count', require('./components/Count'));
Vue.component('back-top', require('./components/BackTop'));


const app = new Vue({
    el: '#app'
});