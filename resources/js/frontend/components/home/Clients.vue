<template>
    <!-- testimonial start  -->
    <div class="customer-feedback">
        <div class="container">
            <div class="row my-4">
                <div class="col-12">
                    <div>
                        <h2 style="text-align: center; color: green">
                            What Clients Say
                        </h2>
                    </div>
                </div>
                <!-- /End col -->
            </div>
            <!-- /End row -->

            <div class="row mb-3 mx-0 mx-sm-5">
                <div class="col-md-12">
                    <div class="owl-carousel feedback-slider">
                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img
                                src="https://excelitai.com/wp-content/uploads/2020/03/john-vlastelica-250x312.jpeg"
                                class="center-block img-circle"
                                alt="Customer Feedback"
                            />
                            <h2 class="customer-name">Zedrew Kowzel</h2>
                            <h4 class="designation">
                                CTO of Smart Tech Solution
                            </h4>
                            <p>
                                As a growing company, we found in Excel IT AI’
                                expertise in data science invaluable. In almost
                                two years of cooperation, they’ve helped us
                                define ...
                            </p>
                            <!-- <span
                                class="light-bg customer-rating"
                                data-rating="5"
                            >
                                5
                                <i class="fa fa-star"></i>
                            </span> -->
                        </div>
                        <!-- /slider item -->

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img
                                src="https://excelitai.com/wp-content/uploads/2020/03/LeBlanc_John_New-2020-Bio-Template-730-x-730-250x312.jpg"
                                class="center-block img-circle"
                                alt="Customer Feedback"
                            />
                            <h2 class="customer-name">Androi Roi</h2>
                            <h4 class="designation">CTO of N Seles</h4>
                            <p>
                                As a growing company, we found in Excel IT AI’
                                expertise in mobile application invaluable. In
                                almost two years of cooperation, they’ve helped
                                us define ...
                            </p>
                            <!-- <span
                                class="light-bg customer-rating"
                                data-rating="4"
                            >
                                4
                                <i class="fa fa-star"></i>
                            </span> -->
                        </div>
                        <!-- /slider item -->

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img
                                src="https://excelitai.com/wp-content/uploads/2020/03/YTxFZF2x_400x400-250x312.jpg"
                                class="center-block img-circle"
                                alt="Customer Feedback"
                            />
                            <h2 class="customer-name">Watson Jsye</h2>
                            <h4 class="designation">CTO of Tech Solution</h4>
                            <p>
                                As a growing company, we found in Excel IT AI’
                                expertise in data science invaluable. In almost
                                two years of cooperation, they’ve helped us
                                define ...
                            </p>
                            <!-- <span
                                class="light-bg customer-rating"
                                data-rating="5"
                            >
                                5
                                <i class="fa fa-star"></i>
                            </span> -->
                        </div>
                        <!-- /slider item -->
                    </div>
                    <!-- /End feedback-slider -->
                </div>
                <!-- /End col -->
            </div>
            <!-- /End row -->
        </div>
        <!-- /End container -->
    </div>
    <!-- /End customer-feedback -->
</template>

<script>
export default {
    mounted() {},
};
</script>

<style scoped>
@import "../../../../assets/css/bootstrap5.min.css";
/* CAROUSEL STARTS */
.customer-feedback .owl-item img {
    width: 85px;
    height: 85px;
}

.feedback-slider-item {
    position: relative;
    padding: 60px;
    margin-top: -40px;
}

.customer-name {
    margin-top: 15px;
    margin-bottom: 25px;
    font-size: 20px;
    font-weight: 500;
}

@media screen and (max-width: 700px) {
    .customer-name {
        font-size: 16px;
    }
}
.feedback-slider-item p {
    line-height: 1.875;
}

.customer-rating {
    background-color: #eee;
    border: 3px solid #fff;
    color: rgba(1, 1, 1, 0.702);
    font-weight: 700;
    border-radius: 50%;
    position: absolute;
    width: 47px;
    height: 47px;
    line-height: 44px;
    font-size: 15px;
    right: 0;
    top: 77px;
    text-indent: -3px;
}

.thumb-prev .customer-rating {
    top: -20px;
    left: 0;
    right: auto;
}

.thumb-next .customer-rating {
    top: -20px;
    right: 0;
}

.customer-rating i {
    color: rgb(251, 90, 13);
    position: absolute;
    top: 10px;
    right: 5px;
    font-weight: 600;
    font-size: 12px;
}

/* GREY BACKGROUND COLOR OF THE ACTIVE SLIDER */
.feedback-slider-item:after {
    content: "";
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: 0;
    top: 103px;
    background-color: #f6f6f6;
    border: 1px solid rgba(251, 90, 13, 0.1);
    border-radius: 10px;
    z-index: -1;
}

.thumb-prev,
.thumb-next {
    position: absolute;
    z-index: 99;
    top: 45%;
    width: 98px;
    height: 98px;
    left: -90px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

.thumb-next {
    left: auto;
    right: -90px;
}

.feedback-slider-thumb img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
}

.feedback-slider-thumb:hover {
    opacity: 0.8;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.customer-feedback .owl-nav [class*="owl-"] {
    position: relative;
    display: inline-block;
    bottom: 45px;
    transition: all 0.2s ease-in;
}

.customer-feedback .owl-nav i {
    background-color: transparent;
    color: rgb(251, 90, 13);
    font-size: 25px;
}

.customer-feedback .owl-prev {
    left: -15px;
}

.customer-feedback .owl-prev:hover {
    left: -20px;
}

.customer-feedback .owl-next {
    right: -15px;
}

.customer-feedback .owl-next:hover {
    right: -20px;
}

/* DOTS */
.customer-feedback .owl-dots {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 35px;
}
.customer-feedback .owl-dot {
    display: inline-block;
}

.customer-feedback .owl-dots .owl-dot span {
    width: 11px;
    height: 11px;
    margin: 0 5px;
    background: #fff;
    border: 1px solid rgb(251, 90, 13);
    display: block;
    -webkit-backface-visibility: visible;
    -webkit-transition: all 200ms ease;
    transition: all 200ms ease;
    border-radius: 50%;
}

.customer-feedback .owl-dots .owl-dot.active span {
    background-color: rgb(251, 90, 13);
}

/* RESPONSIVE */
@media screen and (max-width: 767px) {
    .feedback-slider-item:after {
        left: 30px;
        right: 30px;
    }
    .customer-feedback .owl-nav [class*="owl-"] {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        margin-top: 45px;
        bottom: auto;
    }
    .customer-feedback .owl-prev {
        left: 0;
    }
    .customer-feedback .owl-next {
        right: 0;
    }
}
</style>
