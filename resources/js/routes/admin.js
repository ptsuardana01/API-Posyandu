const Dashboard = require('../components/admin/pages/Dashboard.vue').default
const Kader = require('../components/admin/pages/Kader.vue').default
const Ortu = require('../components/admin/pages/Ortu.vue').default
const Balita = require('../components/admin/pages/Balita.vue').default
const formKader = require('../components/admin/pages/forms/formKader.vue').default

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
        name: 'form-kader',
        path: '/admin/petugas-posyandu/tambah-petugas-posyandu',
        component: formKader
    },
    {
        name: 'form-edit-kader', 
        path: '/admin/petugas-posyandu/edit-petugas-posyandu/:id',
        component: formKader
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
