window.Vue = require('vue');

window.axios = require('axios');

import Vue from 'vue';
import App from './views/App';

const app = new Vue({


    el: '#root',
    render: h => h(App) //metodo di default di vue che renderizza il nostro app.vue


})