const Dashboard = require('../components/admin/pages/Dashboard.vue').default

const Kader = require('../components/admin/pages/Kader.vue').default
const formKader = require('../components/admin/pages/forms/formKader.vue').default

const Ortu = require('../components/admin/pages/Ortu.vue').default
const formOrtu = require('../components/admin/pages/forms/formOrtu.vue').default
const Bumil = require('../components/admin/pages/Bumil.vue').default
const formPemeriksaanBumil = require('../components/admin/pages/forms/formPemeriksaanBumil.vue').default

const Balita = require('../components/admin/pages/Balita.vue').default
const formBalita = require('../components/admin/pages/forms/formBalita.vue').default

const formPemeriksaanBalita = require('../components/admin/pages/forms/formPemeriksaanBalita.vue').default
const PemeriksaanBalita = require('../components/admin/pages/PemeriksaanBalita.vue').default

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

    // Pemeriksaan Bumil //
    {
        name: 'bumil',
        path: '/admin/orang-tua/data-bumil',
        component: Bumil
    },
    {
        name: 'form-bumil',
        path: '/admin/orang-tua/tambah-data-bumil',
        component: formPemeriksaanBumil
    },
    {
        name: 'form-edit-bumil',
        path: '/admin/orang-tua/edit-data-bumil',
        component: formPemeriksaanBumil
    },
    // End Pemeriksaan Bumil //

    // Balita //
    {
        name: 'balita',
        path: '/admin/balita',
        component: Balita
    },
    {
        name: 'form-balita',
        path: '/admin/balita/tambah-data-balita',
        component: formBalita
    },
    {
        name: 'form-edit-balita',
        path: '/admin/balita/edit-data-balita/:id',
        component: formBalita
    },
    // End Balita //

    // Pemeriksaan Balita //
    {
        name: 'pemeriksaan-balita',
        path: '/admin/pemeriksaan-balita/',
        component: PemeriksaanBalita
    },
    {
        name: 'form-pemeriksaan-balita',
        path: '/admin/tambah-pemeriksaan-balita',
        component: formPemeriksaanBalita
    },
    {
        name: 'edit-pemeriksaan-balita',
        path: '/admin/edit-pemeriksaan-balita',
        component: formPemeriksaanBalita
    },
    // End Pemeriksaan Balita //
]
