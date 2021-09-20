<template>
    <!-- main-wrapper start -->
    <main class="main-wrapper">
        <!-- about-section start -->
        <section class="about-section" style="background-color: #d1d8e0">
            <div class="container">
                <div class="row">
                    <div class="section-heading col-md-12 mb-2">
                        <h2
                            class="text-center text-uppercase py-3"
                            style="color: green"
                        >
                            _About Company_
                        </h2>
                    </div>
                </div>
                <div class="about-wrapper">
                    <div class="about-item tabcontent" id="mission">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="about-content">
                                    <h4>
                                        Deliver high-quality software on time,
                                        on scope, on budget.
                                    </h4>
                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        As a solution providing company we offer
                                        a wide range of consulting, development
                                        & quality services with 100%
                                        satisfaction.
                                    </p>

                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        We like solving difficult problems and
                                        creating high-performance software
                                        that’s easy to use. We design, we build,
                                        we support, we ask the right questions.
                                        We believe in efficient communication
                                        and thoughtful project management
                                        throughout the whole work process. Each
                                        day, we continue building long-lasting
                                        partnerships with our clients all across
                                        the Nordic region without ever losing
                                        the drive to strive for excellence and
                                        innovation.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="about-thumb">
                                    <img
                                        class="img-fluid"
                                        src="../../../../assets/images/about/p1.png"
                                        alt="about-thumb"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-item tabcontent" id="vision">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="about-content">
                                    <h4 style="text-align: justify">
                                        Vision is to bring the power of AI to
                                        every business
                                    </h4>
                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        As a solution providing company we offer
                                        a wide range of consulting, development
                                        & quality services with 100%
                                        satisfaction.
                                    </p>
                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        We like solving difficult problems and
                                        creating high-performance software
                                        that’s easy to use. We design, we build,
                                        we support, we ask the right questions.
                                        We believe in efficient communication
                                        and thoughtful project management
                                        throughout the whole work process. Each
                                        day, we continue building long-lasting
                                        partnerships with our clients all across
                                        the Nordic region without ever losing
                                        the drive to strive for excellence and
                                        innovation.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="about-thumb">
                                    <img
                                        class="img-fluid"
                                        src="../../../../assets/images/about/p3.png"
                                        alt="about-thumb"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-item tabcontent" id="core">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="about-content">
                                    <h4>
                                        Deliver high-quality software on time,
                                        on scope, on budget.
                                    </h4>
                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        As a solution providing company we offer
                                        a wide range of consulting, development
                                        & quality services with 100%
                                        satisfaction.
                                    </p>
                                    <p
                                        style="
                                            text-align: justify;
                                            color: black;
                                        "
                                    >
                                        We like solving difficult problems and
                                        creating high-performance software
                                        that’s easy to use. We design, we build,
                                        we support, we ask the right questions.
                                        We believe in efficient communication
                                        and thoughtful project management
                                        throughout the whole work process. Each
                                        day, we continue building long-lasting
                                        partnerships with our clients all across
                                        the Nordic region without ever losing
                                        the drive to strive for excellence and
                                        innovation.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="about-thumb">
                                    <img
                                        class="img-fluid"
                                        src="../../../../assets/images/about/p2.png"
                                        alt="about-thumb"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px">
                        <div class="offset-lg-6 text-center col-lg-6">
                            <div class="about-filter">
                                <button
                                    class="btn btn-danger btn-lg my-1 mx-1"
                                    @click="openPage('mission')"
                                >
                                    Our Mission
                                </button>
                                <button
                                    class="btn btn-success btn-lg my-1 mx-1"
                                    @click="openPage('vision')"
                                    id="defaultOpen"
                                >
                                    Our Vision
                                </button>
                                <button
                                    class="btn btn-info btn-lg my-1 mx-1"
                                    @click="openPage('core')"
                                >
                                    Core Values
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
    </main>
    <!-- main-wrapper start -->
</template>

<script>
import AboutJs from "../../../../assets/js/about.js";
// import BootstrapBundle from "../../../../assets/js/bootstrap.bundle.min.js";
export default {
    methods: {
        // tabs start
        openPage(pageName) {
            var i, tabcontent;
            //   console.log(event.target);
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(pageName).style.display = "block";
        },
    },
    mounted() {
        // BootstrapBundle();
        AboutJs();
    },
};
</script>

<style scoped>
@import "../../../../assets/css/bootstrap5.min.css";
@import "../../css/home_slider_about.css";

@media screen and (max-width: 700px) {
    .about-thumb img {
        width: 100% !important;
        object-fit: contain;
    }
}
</style>
