import Api from './Api.js';

export default   {
    lists(){
       return Api().get('/slider/list');
    },
    show(slider_id){
        return Api().get(`slider/show/${slider_id}`)
    },
    store(form){
        return Api().post('slider/store',form);
    },
    update(form,slider_id){
       return Api().post(`slider/update/${slider_id}`,form)
    },
    delete(slider_id){
       return Api().delete(`/slider/delete/${slider_id}`)
    },


}

