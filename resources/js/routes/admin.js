const Dashboard = require('../components/admin/pages/Dashboard.vue').default
const Kader = require('../components/admin/pages/Kader.vue').default
const Ortu = require('../components/admin/pages/Ortu.vue').default
const Balita = require('../components/admin/pages/Balita.vue').default

export const adminRoutes = [
    {
        name: 'dashboard',
        path: '/admin/dashboard',
        component: Dashboard
    },
    {
        name: 'kader',
        path: '/admin/petugas-posyandu',
        component: Kader
    },
    {
        name: 'ortu',
        path: '/admin/orang-tua',
        component: Ortu
    },
    {
        name: 'balita',
        path: '/admin/balita',
        component: Balita
    },
]
