import Api from "./Api";
export default {
    sendApplyForJobRequest(form) {
        return Api().post("apply-for-job", form);
    },
};
