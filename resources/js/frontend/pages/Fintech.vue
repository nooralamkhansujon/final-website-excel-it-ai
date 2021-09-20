<template>
    <!-- industries top title section start -->
    <section class="fintech mt-5" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row" style="text-align: center; padding-bottom: 50px">
                <h1>Fintech</h1>
                <h5>Home/Fintech</h5>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: center; font-weight: bold">
                        Banking and financial software development expertise
                    </h3>
                    <br />
                    <p
                        style="
                            text-align: justify;
                            text-align: center;
                            font-size: medium;
                            color: #fff;
                        "
                    >
                        We offer custom payment gateway development services to
                        help you reduce costs for sign-ups and long-term fees
                        offered by ready-made payment software solutions. The
                        good thing about bespoke gateway development is that it
                        allows for enriching your solution with those features
                        that your flow needs, e.g., multi-currency transfers or
                        recurring payments. Besides, we guarantee the PSI DSS
                        compliance and offer the latest fraud detection methods
                        implementation. We offer both custom and off-the-shelf
                        online payment software solutions integration for online
                        stores, marketplaces, websites. The scope of our custom
                        payment development services includes the discovery of
                        your business logic, payment process flow, customers to
                        define the required features, the best suitable
                        interface, and security methods. While integrating
                        ready-made solutions, we guarantee full interoperability
                        concerning your IT infrastructure.
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
                            <router-link :to="{ name: 'Fintech' }"
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
    <section class="linear_gradient" style="padding: 50px 0px 50px 0px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <h4 style="text-align: center; text-transform: uppercase">
                        Technologies that we use
                    </h4>
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
.fintech {
    background-image: url(../../../assets/images/industries/web_development_bg.jpg);
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
li,
h4 {
    color: rgba(25, 204, 160);
}
p,
li:hover,
a {
    color: #fff;
}
.linear_gradient {
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
