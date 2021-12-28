require("./bootstrap");

window.Vue = require("vue").default;

import VueAxios from 'vue-axios';
import axios from 'axios';
import adminApp from "./components/admin/App.vue";
import kaderApp from "./components/kader/App.vue";
import userApp from "./components/user/App.vue";
import VueRouter from "vue-router";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.all';

Vue.use(VueRouter);
Vue.use(VueSweetalert2);
Vue.use(VueAxios, axios);

Vue.component('pagination', require('laravel-vue-pagination'));

import { adminRoutes } from "./routes/admin";
import { kaderRoutes } from "./routes/kader";
import { userRoutes } from "./routes/user";


const adminRouter = new VueRouter({
    linkActiveClass: 'router-link-exact-active',
    mode: "history",
    routes: adminRoutes,
});

const kaderRouter = new VueRouter({
    linkActiveClass: 'router-link-exact-active',
    mode: "history",
    routes: kaderRoutes,
});

const userRouter = new VueRouter({
    linkActiveClass: "active",
    mode: "history",
    routes: userRoutes,
});

const admin = new Vue({
    el: "#admin",
    router: adminRouter,
    render: (h) => h(adminApp),
});
const kader = new Vue({
    el: "#kader",
    router: kaderRouter,
    render: (h) => h(kaderApp),
});
const user = new Vue({
    el: "#user",
    router: userRouter,
    render: (h) => h(userApp),
});
