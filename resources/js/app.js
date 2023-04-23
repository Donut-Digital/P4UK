require('./bootstrap')

import { createApp } from 'vue'

import contact_us from "./components/contact_us.vue";

import '../css/app.css';

import './scripts/navigation_menu';

const app = createApp({})

app.component('contact-us', contact_us)

app.mount('#app')