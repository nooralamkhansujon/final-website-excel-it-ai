import DashBoard from "../pages/Dashboard.vue";
import Profile from "../pages/Profile.vue";
import Login from "../pages/Login.vue";
import ViewSoftwareTeam from "../pages/ViewSoftwareTeam.vue";
import ViewManagement from "../pages/ViewManagement.vue";
import ViewSlider from "../pages/ViewSlider.vue";
const routes = [
    {
        path: "/admin/dashboard",
        component: DashBoard,
        name: "AdminDashboard",
        meta: { requiresAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.requiresAdmin && isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminLogin" });
            }
        },
    },
    {
        path: "/admin/login",
        component: Login,
        name: "AdminLogin",
        meta: { guestAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.guestAdmin && !isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminDashboard" });
            }
        },
    },
    {
        path: "/admin/profile",
        component: Profile,
        name: "AdminProfile",
        meta: { requiresAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.requiresAdmin && isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminLogin" });
            }
        },
    },
    {
        path: "/admin/software-team",
        component: ViewSoftwareTeam,
        name: "ViewSoftwareTeam",
        meta: { requiresAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.requiresAdmin && isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminLogin" });
            }
        },
    },
    {
        path: "/admin/maangement-team",
        component: ViewManagement,
        name: "ViewManagement",
        meta: { requiresAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.requiresAdmin && isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminLogin" });
            }
        },
    },
    {
        path: "/admin/slider",
        component: ViewSlider,
        name: "ViewSlider",
        meta: { requiresAdmin: true, admin: true },
        beforeEnter: (to, _, next) => {
            if (to.meta.requiresAdmin && isAdminLogin()) {
                next();
            } else {
                next({ name: "AdminLogin" });
            }
        },
    },
];

export default routes;

function isAdminLogin() {
    // console.log(localStorage.getItem("admin_token"));
    if (localStorage.getItem("admin_token")) return true;
    return false;
}
