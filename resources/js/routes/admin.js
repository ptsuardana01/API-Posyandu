const Dashboard = require('../components/admin/pages/Dashboard.vue').default
const Kader = require('../components/admin/pages/Kader.vue').default
const AddDatas = require('../components/admin/pages/AddDatas.vue').default

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
        path: '/admin/add-kader',
        component: AddDatas
    },
]
