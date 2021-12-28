const Homepage = require("../components/user/pages/Homepage.vue").default;
const Registrasi = require("../components/user/pages/Registrasi.vue").default;
export const userRoutes = [
    {
        name: "Homepage",
        path: "/user/dashboard",
        component: Homepage,
    },
    {
        name: "Registrasi",
        path: "/user/Registrasi",
        component: Registrasi,
    },
];
