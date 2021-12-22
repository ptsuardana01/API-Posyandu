<template>
    <div class="">
        <Navbar></Navbar>
        <Homepage></Homepage>
    </div>
</template>

<script>
import Navbar from "./Navbar.vue";
import Homepage from "./pages/Homepage.vue";
export default {
    components: {
        Homepage,
        Navbar,
    },
};
</script>
