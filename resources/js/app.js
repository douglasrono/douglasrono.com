import './bootstrap'
import { createApp } from 'vue'

// Vuetify
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
  components,
  directives,
})

const app = createApp({})

app.use(vuetify)

import MainSection from './components/MainSection.vue'
import FooterSection from './components/FooterSection.vue'
app.component('main-section', MainSection)
app.component('footer-section', FooterSection)

app.mount('#app')
