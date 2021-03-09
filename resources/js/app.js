import '../../node_modules/bootstrap/dist/css/bootstrap.min.css'
import '../css/app.css'
import 'vite/dynamic-import-polyfill'
import { createApp } from 'vue'
import App from './App.vue'
createApp(App).mount('#app')
// import HelloWorld from './components/HelloWorld.vue'
// const app = createApp({
//     components: {
//         HelloWorld,
//     },
// }).mount('#app')
