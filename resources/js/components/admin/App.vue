<template>
    <div class="">
        <Header></Header>
        <div class="text-header">
            <h4>Petugas Posyandu</h4>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <router-link class="nav-link" aria-current="true" to="/admin/data-kader">Datas</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/admin/add-kader">Add Data</router-link>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
export default {
    components: {
        Header,
        Footer,
    },
};
</script>
