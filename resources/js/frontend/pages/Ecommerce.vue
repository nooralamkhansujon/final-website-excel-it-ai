<template>
    <!-- industries top title section start -->
    <section class="ecommarce mt-5" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row" style="text-align: center; padding-bottom: 50px">
                <h1 style="font-size: 30px; text-transform: uppercase">
                    Financials & Banking
                </h1>
                <h5
                    style="
                        color: wheat;
                        word-spacing: 0.2ch;
                        text-transform: uppercase;
                        line-height: 30px;
                    "
                >
                    Home / Financials & Banking
                </h5>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3
                        style="
                            text-align: center;
                            font-weight: bold;
                            color: wheat;
                            word-spacing: 0.2ch;
                            text-transform: uppercase;
                            line-height: 30px;
                            font-size: 25px;
                        "
                    >
                        Delivering the insights you to help business growth
                    </h3>
                    <br />
                    <p
                        style="
                            text-align: justify;
                            color: #fff;
                            word-spacing: 0.2ch;
                            text-transform: capitalize;
                            line-height: 30px;
                        "
                    >
                        To take a trivial example, which of us ever under-takes
                        laborious physical exercise, except to obtain some
                        advantage from it but who has any right find fault with
                        a man who chooses to enjoy a get pleasure that has
                        annoying. Undertakes laborious physical exercise, except
                        to obtain some advantage from it but who has any find
                        fault with a man who chooses.
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
    <section class="" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <h3 style="text-align: center">Technologies that we use</h3>
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
                        src="../../../assets/images/industries/meeting-1453895_960_720.webp"
                        class="img-fluid"
                        style="height: 50%"
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

<style>
.ecommarce {
    background-image: url(../../../assets/images/industries/e-commerce.jpg);
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

li:hover {
    color: #fff;
}
h1 {
    color: rgb(17, 226, 174);
}
h4,
h3,
h5 {
    color: rgb(20, 167, 130);
}
p,
li,
a {
    color: rgba(25, 204, 160);
}

.technology {
    background: #fff;
}

.technology {
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
