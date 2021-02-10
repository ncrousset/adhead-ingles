require('./bootstrap');

// require('alpinejs');

// window.Vue = require('vue');
import Vue from 'vue'

Vue.component('app-header', require('./components/layout/Header.vue').default);

const app = new Vue({
    el: '#app',
});