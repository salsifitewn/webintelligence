// import 'poppers.js'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '../css/app.css'
import 'vite/dynamic-import-polyfill'
import { createApp } from 'vue'

import HelloWorld from './components/HelloWorld.vue'
const app = createApp({
    components: {
        HelloWorld,
    },
}).mount('#app')
