import Api from './Api'
export default   {

    login(form){
       return  Api().post('login',form);
   },
    admin(){
       return  Api().get('/');
   },
    logout(){
       return Api().post('logout');
   }
}
