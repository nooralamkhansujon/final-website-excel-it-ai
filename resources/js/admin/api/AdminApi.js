import Api from './Api'
export default   {
    updateProfile(form,admin_id){
        return Api().post(`profile/update/${admin_id}`,form);
    }
}
