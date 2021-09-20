<template>
    <!-- Our Project section start -->
    <div class="project-section py-5">
        <div class="container">
            <div class="row my-3 py-3">
                <h1 class="text-center" style="color: #008000">Our Project</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 my-2 my-md-0">
                    <h3
                        style="color: #46abea !important"
                        class="text-primary heder-font"
                    >
                        Completed Projects
                    </h3>
                    <div class="list-group my-2">
                        <project-accordian title="Cloud5Bd">
                            <a href="https://cloud5bd.com/"> Cloud5Bd</a>
                        </project-accordian>
                        <project-accordian title="shopahs">
                            <a href="https://cloud5bd.com/"> shopahs</a>
                        </project-accordian>

                        <project-accordian title="Royal Dutch Medical Hospital">
                            <a href="https://royaldutchmc.com/"
                                >Royal Dutch Medical Hospital
                            </a>
                        </project-accordian>
                        <project-accordian title="Shahid Mahmum">
                            <strong>
                                <a href="#">Shahid Mahmum </a>
                            </strong>
                        </project-accordian>

                        <br />
                    </div>
                    <button
                        style="background-color: #46abea !important"
                        class="btn btn-info"
                    >
                        Read more
                    </button>
                </div>

                <div class="col-12 col-md-4 my-2 my-md-0">
                    <h3
                        style="color: #9b59b6 !important"
                        class="text-info heder-font"
                    >
                        Ongoing Projects
                    </h3>
                    <div class="list-group">
                        <project-accordian
                            title="Distribution Management System"
                        >
                            <a href="http://marcospizza.us/">marcospizza </a>
                        </project-accordian>
                        <project-accordian title="Paramount Fitness">
                            <a href="http://paramount-fitness.com"
                                >Paramount Fitness
                            </a>
                        </project-accordian>
                        <project-accordian title="Grow with funnels ">
                            <a href="http://growwithfunnels.com">
                                Grow with funnels</a
                            >
                        </project-accordian>

                        <project-accordian title="Destiny unchained ">
                            <a href="http://destinyunchained.com/"
                                >Destiny unchained
                            </a>
                        </project-accordian>
                    </div>
                    <br />
                    <button
                        style="background-color: #9b59b6 !important"
                        class="btn btn-info"
                    >
                        Read more
                    </button>
                </div>

                <div class="col-12 col-md-4 my-2 my-md-0">
                    <h3
                        style="color: #30cb83 !important"
                        class="text-success heder-font"
                    >
                        Upcoming Projects
                    </h3>
                    <div class="list-group">
                        <project-accordian title="Oki tonic">
                            <a href="http://okitonic.com"> Oki tonic</a>
                        </project-accordian>
                        <project-accordian title="hidden dog training hacks ">
                            <strong
                                ><a href="http://hiddendogtraininghacks.com/"
                                    >hidden dog training hacks
                                </a>
                            </strong>
                        </project-accordian>
                        <project-accordian title="The Breedersspot ">
                            <strong>
                                <a href="http://thebreedersspot.com/"
                                    >The Breedersspot
                                </a>
                            </strong>
                        </project-accordian>
                        <project-accordian title="getaway dash">
                            <a href="http://getawaydash.com/"> getaway dash</a>
                        </project-accordian>
                        <project-accordian title="point er reale state">
                            <a href="http://pointerrealestate.com/"
                                >point er reale state
                            </a>
                        </project-accordian>
                    </div>
                    <br />
                    <button
                        style="background-color: #30cb83 !important"
                        class="btn btn-info"
                    >
                        Read more
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Our project end -->
</template>

<script>
import ProjectAccordian from "./ProjectAccordian.vue";
export default {
    components: { ProjectAccordian },

    mounted() {
        // BootstrapBundle();
        // require("../../../../assets/js/bootstrap.bundle.min.js");
    },
};
</script>

<style scoped>
.project-section {
    background: #d1d8e0 !important;
}
/* @import "../../../../assets/css/bootstrap5.min.css"; */
@import "../../css/home_slider_our_project.css";
</style>
