require('./bootstrap');

window.Vue = require('vue').default;

import adminApp from './components/admin/App.vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


import { adminRoutes } from './routes/admin';


const adminRouter = new VueRouter({
    linkActiveClass: 'router-link-exact-active',
    mode: 'history',
    routes:adminRoutes
})

const admin = new Vue({
    el: '#admin',
    router:adminRouter,
    render:h=>h(adminApp)
});
