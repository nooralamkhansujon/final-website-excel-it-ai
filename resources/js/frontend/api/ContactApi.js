import Api from "./Api";
export default {
    sendContact(form) {
        return Api().post("contact", form);
    },
};
