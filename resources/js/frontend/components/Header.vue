<template>
    <!-- header start -->
    <header class="header-section">
        <div class="main-menu">
            <div class="container-fluid p-0">
                <nav-component></nav-component>
            </div>
        </div>
    </header>
    <!-- header end -->
</template>

<script>
import NavComponent from "./NavComponent.vue";
export default {
    components: { NavComponent },
    mounted() {},
};
</script>

<style scoped>
@import "../../../assets/css/menubar.css";
</style>
