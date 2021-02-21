require('./bootstrap');

// require('alpinejs');

// window.Vue = require('vue');
import Vue from 'vue'
import VueYouTubeEmbed from 'vue-youtube-embed'

Vue.use(VueYouTubeEmbed)

Vue.component('app-header', require('./components/layout/Header.vue').default);
Vue.component('play-lyrics', require('./components/video/PlayLyrics').default);
Vue.component('form-video', require('./components/forms/FormVideo').default);

const app = new Vue({
    el: '#app',
});
