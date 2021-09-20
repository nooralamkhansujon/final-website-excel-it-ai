import axios from 'axios';

const BaseApi = axios.create({
    baseURL: 'http://localhost:8000/api/admin',
});



const Api   = function(){
    let token = localStorage.getItem('admin_token');
    if(token){
        BaseApi.defaults.headers.common['Authorization'] = `Bearer ${token}`
    }
    BaseApi.defaults.headers.common['Content-Type']                 = 'application/json';
    BaseApi.defaults.headers.common['Access-Control-Allow-Origin']  = '*';
    BaseApi.defaults.headers.common['X-Requested-With']             = 'XMLHttpRequest';
    BaseApi.defaults.headers.common['Access-Control-Allow-Headers'] = 'Origin,X-Requested-With,Accept,Authorization,Content-Type';
    return BaseApi;
}



export default Api;
