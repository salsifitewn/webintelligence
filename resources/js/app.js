import 'vite/dynamic-import-polyfill'
import 'jquery'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '../css/app.css'
import { createApp } from 'vue'

import ContactsTable from './components/ContactsTable.vue'

const app = createApp({
    components: {
        ContactsTable,
    },
}).mount('#app')
