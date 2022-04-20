window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';
import App from './views/App';

//aggiungere import per usare vue-router

import router from './router'

const app = new Vue({


    el: '#root',
    render: h => h(App), //metodo di default di vue che renderizza il nostro app.vue
    router


})