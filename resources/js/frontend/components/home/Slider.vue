<template>
    <div class="marvel-container spiderman">
        <div class="row">
            <div class="col-md-5">
                <div class="img-container">
                    <div
                        class="img-wrapper"
                        v-for="(slider, index) in sliderList"
                        :key="index"
                    >
                        <div class="background"></div>
                        <img
                            :src="slider.slider_img"
                            :alt="slider.slider_title"
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div
                            class="swiper-slide p-md-5 p-3"
                            v-for="(slider, index) in sliderList"
                            :key="index"
                        >
                            <div class="name">
                                <!-- <div class="sub-title">
                                    <div class="text-wrapper">
                                        <span>Web Application Development</span>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="title">
                                            <div class="text-wrapper">
                                                <span
                                                    >{{ slider.slider_title }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview">
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="text-wrapper">
                                            <span>
                                                <p
                                                    class="description"
                                                    v-text="
                                                        slider.slider_description
                                                    "
                                                ></p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="purchase">
                                <a href="#" class="purchase-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import "../../../../assets/css/bootstrap4.min.css";
// import "../../../../assets/css/slider.css";
// import slider from "../../../../assets/js/slider.js";

import SliderBootstrap from "../../js/home_slider_bootstrap.bundle.min.js";
import SliderJquery from "../../js/home_slider_jquery.min.js";
import SliderScript from "../../js/home_slider_script.js";
import SliderSwiper from "../../js/home_slider_swiper.min.js";
import SliderApi from "../../api/SliderApi.js";
export default {
    data() {
        return {
            sliderList: [],
        };
    },
    mounted() {
        SliderJquery();
        SliderBootstrap();
        SliderSwiper();
        SliderScript();
    },
    methods: {
        async getAllSlider() {
            let {
                data: { sliderList },
            } = await SliderApi.list();

            this.sliderList = sliderList;
        },
    },
    created() {
        this.getAllSlider();
    },
};
</script>

<style scoped>
@import "../../css/home_slider_bootstrap.css";
@import "../../css/home_slider_swiper.min.css";
@import "../../css/home_slider.css";
.img-wrapper {
    width: 100%;
    object-fit: contain;
}

@media screen and (max-width: 700px) {
    .title .text-wrapper {
        font-size: 1rem;
    }
}
</style>
