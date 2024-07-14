import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import MainSection from './components/MainSection.vue';
import FooterSection from './components/FooterSection.vue';
app.component('main-section', MainSection);
app.component('footer-section', FooterSection);

app.mount('#app');
