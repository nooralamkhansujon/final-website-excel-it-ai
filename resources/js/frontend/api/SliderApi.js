import Api from "./Api";
export default {
    list() {
        return Api().get("slider/list/frontend");
    },
};
