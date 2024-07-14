import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import MainContent from './components/MainContent.vue';
app.component('maincontent', MainContent);

app.mount('#app');
