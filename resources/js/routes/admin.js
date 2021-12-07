const Datas = require('../components/admin/pages/Datas.vue').default
const AddDatas = require('../components/admin/pages/AddDatas.vue').default

export const adminRoutes = [
    {
        path: '/admin/dashboard',
        component: Datas
    },
    {
        path: '/admin/data-kader',
        component: Datas
    },
    {
        path: '/admin/add-kader',
        component: AddDatas
    },
]
