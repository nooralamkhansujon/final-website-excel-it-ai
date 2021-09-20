import Api from "./Api.js";

export default {
    lists() {
        return Api().get("/management/list");
    },
    show(management_id) {
        return Api().get(`management/show/${management_id}`);
    },
    store(form) {
        return Api().post("management/store", form);
    },
    update(form, management_id) {
        return Api().post(`management/update/${management_id}`, form);
    },
    delete(management_id) {
        return Api().delete(`/management/delete/${management_id}`);
    },
};
