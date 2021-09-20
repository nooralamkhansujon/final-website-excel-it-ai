import Api from "./Api";
export default {
    list() {
        return Api().get("softwareteam/list/frontend");
    },
};
