import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import HeaderComponent from './components/HeaderComponent.vue';
import FooterComponent from './components/FooterComponent.vue';
app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);



app.mount('#app');
