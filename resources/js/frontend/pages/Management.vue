<template>
    <!-- our team section start -->
    <section class="mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <h2 class="text-center">Our Management Team</h2>
                </div>
            </div>
            <div class="row" style="padding-bottom: 50px">
                <div
                    class="col-md-4 col-sm-4"
                    v-for="(management, index) in managementList"
                    :key="index"
                >
                    <div class="box">
                        <img :src="management.profile_photo" />
                        <div class="box-content">
                            <h3 style="color: black !important">
                                {{ management.name }}
                            </h3>
                            <span class="post">{{
                                management.designation
                            }}</span>

                            <a href="#"
                                ><i
                                    class="fab fa-facebook-square"
                                    style="color: black"
                                ></i
                            ></a>
                            <a href="#"
                                ><i
                                    class="fab fa-linkedin-in"
                                    style="color: black"
                                ></i
                            ></a>
                        </div>
                        <ul class="title" style="text-align: center">
                            <h3 style="color: black">{{ management.name }}</h3>
                            <p style="color: gray">
                                {{ management.designation }}
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our team section end -->
</template>

<script>
import ManagementApi from "../api/ManagementApi.js";
export default {
    data() {
        return {
            managementList: [],
        };
    },
    methods: {
        async getAllManagement() {
            let {
                data: { managementList },
            } = await ManagementApi.list();
            this.managementList = managementList;
        },
    },
    mounted() {
        this.getAllManagement();
    },
};
</script>

<style scoped>
/* our team section start  */
.box {
    font-family: "Raleway", sans-serif;
    overflow: hidden;
    position: relative;
    transition: all 0.4s ease-in-out;
    background: #fff;
}
.box:hover {
    box-shadow: 0 0 0 5px rgba(218, 17, 67, 0.1);
}
.box:before {
    content: "";
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: 3px solid #fff;
    opacity: 0.9;
    position: absolute;
    left: 5px;
    bottom: 5px;
    z-index: 1;
    transition: all 0.4s ease-in-out;
    animation: animate 5s infinite linear;
}
.box:hover:before {
    height: 240px;
    width: 240px;
    bottom: -55px;
    left: -37px;
}
.box img {
    width: 100%;
    height: auto;
    transition: all 0.4s ease-in-out;
}
.box:hover img {
    filter: grayscale(100%);
}
.box .box-content {
    color: white;
    text-align: center;
    width: 160px;

    opacity: 0;
    /* filter: blur(10px); */
    position: absolute;
    bottom: 50px;
    left: 15px;
    z-index: 2;
    transition: all 0.4s ease-in-out;
}
.box .box-content h3 {
    color: #152535 !important;
    text-shadow: none !important;
    font-size: 1rem;
    margin-top: 10px;
}
.box .box-content a {
    font-size: 30px;
    padding-top: 20px;
    padding-right: 10px;
}
.box .box-content:hover {
    /* transform: translate(50px, 100px); */
    transform: rotate(360deg);
}
.box .box-content .icons a:hover {
    /* transform: translate(50px, 100px); */
    transform: rotate(30deg);
    /* transform: rotate(45deg); */
}

.box:hover .box-content {
    filter: blur(0);
    opacity: 1;
    /* top: 80px; */
}
.box .title {
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0 0 2px;
    color: #152535 !important;
    text-shadow: none !important;
}
.box .post {
    font-size: 15px;
    font-weight: 300;
    letter-spacing: 0.5px;
    text-transform: lowercase;
    display: block;
    color: white !important;
}
.box .icon {
    padding: 0;
    margin: 0;
    list-style: none;
    position: absolute;
    bottom: 5px;
    left: 13px;
}
.box .icon li a {
    color: #fff;
    font-size: 13px;
    text-align: center;
    line-height: 30px;
    height: 30px;
    width: 30px;
    margin: 7px 0;
    border-radius: 50% 50% 50% 0;
    display: block;
    transition: all 0.3s;
    animation: animate 5s infinite linear;
}
.box .icon li a:hover {
    box-shadow: 0 0 0 2px #fff inset;
}
@keyframes animate {
    to {
        background-color: #6c5ce7;
    }
    from {
        background-color: #6c5ce7;
    }
}
@media only screen and (max-width: 990px) {
    .box {
        margin: 0 0 30px;
    }
}
/* our team section end */
</style>
