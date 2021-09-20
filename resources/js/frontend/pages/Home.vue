<template>
    <slider />
    <about />
    <service />
    <counting />
    <clients />
    <projects />
    <trusted-company />
</template>

<script>
import About from "../components/home/About.vue";
import Clients from "../components/home/Clients.vue";
import Counting from "../components/home/Counting.vue";
import Projects from "../components/home/Projects.vue";
import Service from "../components/home/Service.vue";
import TrustedCompany from "../components/home/TrustedCompany.vue";
import Slider from "../components/home/Slider.vue";

export default {
    components: {
        About,
        Clients,
        Counting,
        Projects,
        Service,
        TrustedCompany,
        Slider,
    },
};
</script>
