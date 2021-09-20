<template>
    <nav class="navbar navbar-expand-lg my-navbar">
        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo/PPP.jpg" alt="" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            @click.prevent="showNav($event)"
        >
            <span>
                <i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <router-link class="nav-link" :to="{ name: 'Home' }"
                        >Home</router-link
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        >Company</a
                    >
                    <ul
                        class="dropdown-menu mega-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'About' }"
                                >About Company</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'WhyChoose' }"
                                >Why Choose Us</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                :to="{ name: 'Methodology' }"
                                class="dropdown-item"
                            >
                                Methodology</router-link
                            >
                        </li>
                        <li>
                            <a
                                class="
                                    dropdown-item
                                    d-flex
                                    justify-content-between
                                "
                                href="#"
                                >Team
                                <span
                                    ><i
                                        class="fas fa-angle-right ml-3"
                                    ></i></span
                            ></a>
                            <ul class="submenu">
                                <li>
                                    <router-link
                                        class="submenu-item"
                                        :to="{ name: 'Management' }"
                                        >Management</router-link
                                    >
                                </li>
                                <li>
                                    <router-link
                                        class="submenu-item"
                                        :to="{
                                            name: 'SoftwareTeam',
                                        }"
                                        >Software Team</router-link
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        >Course</a
                    >
                    <ul
                        class="dropdown-menu mega-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'LaravelCourse' }"
                                >Laravel</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'FlutterCourse' }"
                                >Flutter</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'UXUIDesignCourse' }"
                                >UI/UX Design</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{
                                    name: 'DigitalMarketingCourse',
                                }"
                                >Digital Marketing</router-link
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                    >
                        Services
                    </a>
                    <ul
                        class="dropdown-menu mega-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'WebApplication' }"
                                >Web Application Development</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'MobileApplication' }"
                                >Mobile Application Development</router-link
                            >
                        </li>

                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'UiUxDesign' }"
                                >UI/UX Design</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'CustomSoftware' }"
                                >Coustom Software Development</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'DigitalMarketing' }"
                                >Digital Marketing</router-link
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Industries
                    </a>
                    <ul
                        class="dropdown-menu mega-menu"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'Fintech' }"
                                >Fintech</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'Health' }"
                                >Healthcare</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'Ecommerce' }"
                                >E-Commerce</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'Internet' }"
                                >Internet Of Things</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'Transportation' }"
                                >Trasportation & Logistics</router-link
                            >
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <router-link :to="{ name: 'Career' }" class="nav-link"
                        >career</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'Contact' }"
                        >contact us</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    methods: {
        showNav(event) {
            let navbar = document.querySelector(".navbar-collapse");
            if (navbar.classList.contains("show-nav")) {
                navbar.classList.remove("show-nav");
            } else {
                navbar.classList.add("show-nav");
            }
        },
    },
};
</script>

<style>
@media screen and (max-width: 992px) {
    .navbar-collapse {
        display: none;
    }
    .show-nav {
        display: block;
    }
}
</style>
