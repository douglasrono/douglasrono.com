import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import FooterComponent from './components/FooterComponent.vue';
app.component('footer-component', FooterComponent);

app.mount('#app');
