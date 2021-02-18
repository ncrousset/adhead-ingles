require('./bootstrap');

// require('alpinejs');

// window.Vue = require('vue');
import Vue from 'vue'
import VueYouTubeEmbed from 'vue-youtube-embed'

Vue.use(VueYouTubeEmbed)

Vue.component('app-header', require('./components/layout/Header.vue').default);
Vue.component('play-lyrics', require('./components/Video/PlayLyrics').default);

const app = new Vue({
    el: '#app',
});
