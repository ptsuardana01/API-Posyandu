const Dashboard = require('../components/admin/pages/Dashboard.vue').default
const Kader = require('../components/admin/pages/Kader.vue').default
const Ortu = require('../components/admin/pages/Ortu.vue').default
const Bumil = require('../components/admin/pages/Bumil.vue').default
const Balita = require('../components/admin/pages/Balita.vue').default
const formKader = require('../components/admin/pages/forms/formKader.vue').default
const formOrtu = require('../components/admin/pages/forms/formOrtu.vue').default

export const adminRoutes = [
    {
        name: 'dashboard',
        path: '/admin/dashboard',
        component: Dashboard
    },
    // Petugas Posyandu //
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
    // End Petugas Posyandu //

    // Orang Tua //
    {
        name: 'ortu',
        path: '/admin/orang-tua/data-orang-tua',
        component: Ortu
    },
    {
        name: 'form-ortu',
        path: '/admin/orang-tua/tambah-orang-tua',
        component: formOrtu
    },
    {
        name: 'form-edit-ortu',
        path: '/admin/orang-tua/edit-orang-tua/:id',
        component: formOrtu
    },
    // End Orang Tua //

    {
        name: 'bumil',
        path: '/admin/orang-tua/data-bumil',
        component: Bumil
    },


    // Balita //
    {
        name: 'balita',
        path: '/admin/balita',
        component: Balita
    },
]
