import {createStore} from 'vuex';


const store = createStore({
    state(){
        return {
            authAdmin:{}
        }
    },
    getters:{
        GET_ADMIN_USER(state){
            return state.authAdmin;
        }
    },
    mutations:{
        SET_AUTH_ADMIN(state,payload){
            state.authAdmin = payload;
        }
    },
    actions:{

    }
});


export default store;
