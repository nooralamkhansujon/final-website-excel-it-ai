<template>
    <!-- industries top title section start -->
    <section class="health mt-5" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row" style="text-align: center; padding-bottom: 50px">
                <h1>Healthcare & Medicine</h1>
                <h5>Home/Healthcare & Medicine</h5>
            </div>
            <div class="row">
                <div class="col-md-6 py-4">
                    <h3 style="text-align: center; font-weight: bold">
                        Our healthcare application development services and
                        solutions
                    </h3>
                    <br />
                    <p
                        style="
                            text-align: justify;
                            color: #fff;
                            word-spacing: 0.2ch;
                            text-transform: capitalize;
                            line-height: 25px;
                        "
                    >
                        We develop software for hospital hardware systems that
                        facilitates automated collection and analysis of data in
                        real time. On top of that, we create custom equipment
                        tracking solutions to help monitor the availability and
                        status of medical devices and equipment in a centralized
                        manner. This is much more convenient than the outdated
                        use of paper notebooks or software tools that were not
                        intended for such purposes from the get-go, such as MS
                        Excel. We have in-depth experience in implementing
                        custom IoT-based software for wearable devices. For
                        instance, we can connect user mobile devices to the
                        global monitoring system in order to optimize patient
                        health state readings collection and provide timely
                        emergency medical assistance.
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <ul style="color: white" class="breadcumpul">
                        <li>
                            <router-link :to="{ name: 'Fintech' }"
                                >Fintech</router-link
                            >
                        </li>
                        <hr />
                        <li>
                            <router-link :to="{ name: 'Health' }"
                                >Healthcare & Medicine</router-link
                            >
                        </li>
                        <hr />
                        <li>
                            <router-link :to="{ name: 'Internet' }"
                                >Financials & Banking</router-link
                            >
                        </li>
                        <hr />
                        <li>
                            <router-link :to="{ name: 'Ecommerce' }"
                                >Travel & Hospitality</router-link
                            >
                        </li>
                        <hr />
                        <li>
                            <router-link :to="{ name: 'Fintech' }"
                                >Media & Entertainment</router-link
                            >
                        </li>
                        <hr />
                        <li>
                            <router-link :to="{ name: 'Transportation' }"
                                >Trasportation & Logistics</router-link
                            >
                        </li>
                        <hr />
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- industries top title section end -->

    <!-- uses tecnology section start -->
    <section class="health-content" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <h4 style="text-align: center">Technologies that we use</h4>
                </div>
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <p
                        style="
                            text-align: center;
                            font-size: medium;
                            font-weight: bold;
                            color: black;
                        "
                    >
                        We denounce with righteos indignation and dislikes men
                        who are so beguiled demoralized cof pleasure of the
                        moment.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul style="color: black" class="ul_tag_style">
                        <li><a href="">Business analysis</a></li>
                        <li><a href="">End-to-end testing</a></li>
                        <li><a href="">Interface design</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul style="color: black" class="ul_tag_style">
                        <li><a href="">Business analysis</a></li>
                        <li><a href="">End-to-end testing</a></li>
                        <li><a href="">Interface design</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img
                        src="../../../assets/images/medical.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- uses tecnology section end -->
</template>

<script>
import "../../../assets/css/bootstrap5.min.css";
export default {};
</script>

<style scoped>
.health {
    background-image: url(../../../assets/images/health.jpg);
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.health::before {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
    background: rgba(21, 37, 53, 0.8);
}
.health .container {
    position: relative;
    z-index: 100;
}
li:hover {
    color: #fff;
}

h1 {
    color: rgb(0, 255, 191);
}
h4,
li h5 {
    color: rgb(20, 167, 130);
}
p,
a {
    color: #fff;
}
.health-content {
    /* background: linear-gradient(
        to bottom,
        rgba(52, 78, 99, 0.9),
        rgba(52, 78, 99)
    ); */
    background: #fff;
}

.ul_tag_style li a,
.breadcumpul li a {
    text-decoration: none !important;
    color: rgb(17, 226, 174) !important;
}
.ul_tag_style li a:hover,
.breadcumpul li a:hover {
    color: black !important;
    text-decoration: none !important;
}
</style>
