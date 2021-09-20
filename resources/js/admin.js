// require("./bootstrap");

//admin component
import AdminMaster from "./AdminMaster.vue";
import routes from "./admin/router/index.js";
import { createApp } from "vue";
import store from "./admin/store/index";
import { createRouter, createWebHistory } from "vue-router";
import "alga-css/dist/alga.min.css";
import VueFeather from "vue-feather";
const router = createRouter({
    routes,
    history: createWebHistory(),
});
const admin = createApp(AdminMaster);
admin.use(router);
admin.use(store);
admin.component(VueFeather.name, VueFeather);
admin.mount("#admin");
