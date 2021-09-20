import Api from "./Api";
export default {
    list() {
        return Api().get("management/list/frontend");
    },
};
