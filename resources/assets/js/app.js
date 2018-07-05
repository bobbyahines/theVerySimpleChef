
/**
 * Load JavaScript dependencies
 */

import '/var/www/html/node_modules/vuetify/dist/vuetify.min.css';
window.Vue = require('vue');
window.axios = require('axios');
import Vuetify from 'vuetify';

Vue.use(Vuetify);


/**
 * Register Components.
 */

Vue.component('app-layout', require('./components/appLayout.vue'));
Vue.component('recipes-list', require('./components/recipesList.vue'));

const app = new Vue({
    el: '#app'
});
