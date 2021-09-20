import Api from './Api.js';

export default   {
    lists(){
       return Api().get('/softwareteam/list');
    },
    show(softwareteam_id){
        return Api().get(`softwareteam/show/${softwareteam_id}`)
    },
    store(form){
        return Api().post('softwareteam/store',form);
    },
    update(form,softwareteam_id){
       return Api().post(`softwareteam/update/${softwareteam_id}`,form)
    },
    delete(softwareteam_id){
       return Api().delete(`/softwareteam/delete/${softwareteam_id}`)
    },


}

