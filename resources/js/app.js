require('./bootstrap');
//require('alpinejs');

import { createApp } from 'vue'
import AppHeader from "./components/layout/Header"
import PlayLyrics from "./components/video/PlayLyrics"
import FormVideo from "./components/forms/FormVideo"


createApp({
    components: {
        AppHeader, PlayLyrics, FormVideo
    }
}).mount("#app")
