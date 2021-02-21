require('./bootstrap');
//require('alpinejs');

import { createApp } from 'vue'
import AppHeader from "./components/layout/Header";
// import VueYouTubeEmbed from 'vue-youtube-embed'


createApp({
    components: {
        AppHeader
    }
}).mount("#app")

// Vue.use(VueYouTubeEmbed)

// appVue.component(VueYouTubeEmbed)
// appVue.component('app-header', Header)
// appVue.component('play-lyrics',  require('./components/video/PlayLyrics'))
// appVue.component('form-video', require('./components/forms/FormVideo'))

// appVue.mount("#app")
