<template>
    <!-- for all frontend view  -->
    <div v-if="frontendHome">
        <Header />
        <router-view></router-view>
        <!-- scroll to top button start  -->
        <Footer />
        <button onclick="topFunction()" id="backtotop" title="Go to top">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
        <!-- scroll to top button end  -->
        <!-- testimonial end  -->
    </div>
</template>
<script>
import Header from "./frontend/components/Header.vue";
import Footer from "./frontend/components/Footer.vue";
// require("jquery");
import "../assets/css/style.css";
// import "../assets/css/owl.carousel.min.css";
// import "../assets/css/owl.theme.default.min.css";
// import "../assets/css/swiper-bundle.min.css";

// import "../assets/css/backtotop.css";
// import "../assets/css/service_card.css";

// import "../assets/css/carousel.css";
// import "../assets/css/our_servics.css";
// import "../assets/css/animate.min.css";

// import "../assets/css/bootstrap5.min.css";

// import "../assets/js/isotope.pkgd.min.js";
// import "../assets/js/swiper-bundle.min.js";
// import "../assets/js/owl.carousel.min.js";
// import "../assets/js/autofilter.js";

// import "../assets/js/three.min.js";
// import "../assets/js/vanta.dots.min.js";
// import Autofilter from "../assets/js/autofilter.js";
// import CustomJs from "../assets/js/custom.js";

export default {
    components: { Header, Footer },
    computed: {
        frontendHome() {
            if (this.$router.currentRoute.value.meta?.frontend) {
                return true;
            } else {
                return false;
            }
        },
    },
    mounted() {},
};
</script>

<style scoped>
#backtotop {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 15px;
    border: none;
    outline: none;
    background-color: tomato;
    color: white;
    cursor: pointer;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 5px;
    animation: pluse 0.9s linear infinite;
}
@keyframes pluse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 99, 71, 0.3);
    }
    20% {
        box-shadow: 0 0 0 10px rgba(255, 99, 71, 0.4);
    }
    40% {
        box-shadow: 0 0 0 10px rgba(255, 99, 71, 0.5);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 99, 71, 0.3);
    }
}
</style>
