<template>
    <div class="">
        <Header></Header>
        <Sidebar></Sidebar>
        <div class="">
            <router-view></router-view>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";
import Dashboard from "./pages/Dashboard.vue";
import Footer from "./Footer.vue";
export default {
    components: {
        Header,
        Sidebar,
        Dashboard,
        Footer,
    },
};
</script>
