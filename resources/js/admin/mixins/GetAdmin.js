import AdminLoginApi from "../api/AdminLoginApi";
export default {
    methods: {
        async GetAdmin() {
            try {
                const {
                    data: { admin },
                } = await AdminLoginApi.admin();
                this.$store.commit("SET_AUTH_ADMIN", admin);
                console.log(admin);
            } catch (error) {
                console.log(error?.response);
                localStorage.removeItem("admin_token");
            }
        },
    },
};
