const Dashboard = require('../components/kader/pages/Dashboard.vue').default

const Ortu = require('../components/kader/pages/Ortu.vue').default
const formOrtu = require('../components/kader/pages/forms/formOrtu.vue').default
const Bumil = require('../components/kader/pages/Bumil.vue').default
const formPemeriksaanBumil = require('../components/kader/pages/forms/formPemeriksaanBumil.vue').default

const Balita = require('../components/kader/pages/Balita.vue').default
const formBalita = require('../components/kader/pages/forms/formBalita.vue').default

const formPemeriksaanBalita = require('../components/kader/pages/forms/formPemeriksaanBalita.vue').default
const PemeriksaanBalita = require('../components/kader/pages/PemeriksaanBalita.vue').default

export const kaderRoutes = [
    {
        name: 'dashboard',
        path: '/petugas-posyandu/dashboard',
        component: Dashboard
    },

    // Orang Tua //
    {
        name: 'ortu',
        path: '/petugas-posyandu/orang-tua/data-orang-tua',
        component: Ortu
    },
    {
        name: 'form-ortu',
        path: '/petugas-posyandu/orang-tua/tambah-orang-tua',
        component: formOrtu
    },
    {
        name: 'form-edit-ortu',
        path: '/petugas-posyandu/orang-tua/edit-orang-tua/:id',
        component: formOrtu
    },
    // End Orang Tua //

    // Pemeriksaan Bumil //
    {
        name: 'bumil',
        path: '/petugas-posyandu/orang-tua/data-bumil',
        component: Bumil
    },
    {
        name: 'form-bumil',
        path: '/petugas-posyandu/orang-tua/tambah-data-bumil',
        component: formPemeriksaanBumil
    },
    {
        name: 'form-edit-bumil',
        path: '/petugas-posyandu/orang-tua/edit-data-bumil',
        component: formPemeriksaanBumil
    },
    // End Pemeriksaan Bumil //

    // Balita //
    {
        name: 'balita',
        path: '/petugas-posyandu/balita',
        component: Balita
    },
    {
        name: 'form-balita',
        path: '/petugas-posyandu/balita/tambah-data-balita',
        component: formBalita
    },
    {
        name: 'form-edit-balita',
        path: '/petugas-posyandu/balita/edit-data-balita/:id',
        component: formBalita
    },
    // End Balita //

    // Pemeriksaan Balita //
    {
        name: 'pemeriksaan-balita',
        path: '/petugas-posyandu/pemeriksaan-balita/',
        component: PemeriksaanBalita
    },
    {
        name: 'form-pemeriksaan-balita',
        path: '/petugas-posyandu/tambah-pemeriksaan-balita',
        component: formPemeriksaanBalita
    },
    {
        name: 'edit-pemeriksaan-balita',
        path: '/petugas-posyandu/edit-pemeriksaan-balita',
        component: formPemeriksaanBalita
    },
    // End Pemeriksaan Balita //
]
