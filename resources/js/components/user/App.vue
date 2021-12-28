<template>
    <div class="">
        <Navbar></Navbar>
        <div>
            <router-view></router-view>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "./Navbar.vue";
import Homepage from "./pages/Homepage.vue";
import Footer from "./Footer.vue";
export default {
    components: {
        Navbar,
        Homepage,
        Footer,
    },
};
</script>

<style>
* {
    scroll-behavior: smooth;
}
body {
    font-family: "Nunito", sans-serif;
}
</style>
