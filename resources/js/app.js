require('./bootstrap');

// require('alpinejs');

// window.Vue = require('vue');
import Vue from 'vue'
import VueYouTubeEmbed from 'vue-youtube-embed'

Vue.use(VueYouTubeEmbed)

Vue.component('app-header', require('./components/layout/Header.vue').default);

const app = new Vue({
    el: '#app',
});