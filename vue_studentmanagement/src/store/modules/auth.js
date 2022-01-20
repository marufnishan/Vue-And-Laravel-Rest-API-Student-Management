import axios from 'axios'
export const auth = {
    state: {
        auth_status:false,
        auth_token:null,
        auth_info:{
        name:null,
        email:null,
        phone:null,
        image:null,
        id:null,
        utype:null,
        }
    },
    getters:{
        GET_AUTH_STATUS(state){
            return state.auth_status;
        },
        GET_AUTH_TOKEN(state){
            return state.auth_token;
        },
        GET_AUTH_INFO(state){
            return state.auth_info;
        },
    },
    actions: {
        LOGIN(context,LoginData){
            
            return new Promise((resolve,reject)=>{
                axios.post('/login',LoginData)
                    .then((res) => {
                        context.commit('SET_AUTH_TOKEN',res.data.access_token)
                        context.commit('SET_AUTH_INFO',res.data.user)
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        },
        REGISTRATION(context,RegData){
            return new Promise((resolve,reject)=>{
                axios.post('/registration',RegData)
                    .then((res) => {
                        context.commit('SET_AUTH_TOKEN',res.data.access_token)
                        context.commit('SET_AUTH_INFO',res.data.user)
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        },
        EDITPROFILE(context,EditProfileData){
            return new Promise((resolve,reject)=>{
                axios.put('/student/profile/update',EditProfileData)
                    .then((res) => {
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        },
        RESET(context,ResetData){
            return new Promise((resolve,reject)=>{
                axios.post('/reset',ResetData)
                    .then((res) => {
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        },
        FORGOT(context,ForgotData){
            return new Promise((resolve,reject)=>{
                axios.post('/forgot',ForgotData)
                    .then((res) => {
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        },
        LOGOUT(context){
            return new Promise((resolve,reject)=>{
                axios.post('/logout')
                    .then((res) => {
                        context.commit('SET_AUTH_LOGOUT')
                        resolve(res);
                    }).catch((err) => {
                        reject(err);
                    });
            })
        }
    }, 
    mutations: {
        SET_AUTH_TOKEN(state,token){
            state.auth_token = token;
            state.auth_status = true;
        },
        SET_AUTH_INFO(state,info){
            state.auth_info.name = info.name;
            state.auth_info.email = info.email;
            state.auth_info.phone = info.phone;
            state.auth_info.image = info.image;
            state.auth_info.id = info.id;
            state.auth_info.utype = info.utype;
        },
        SET_AUTH_LOGOUT(state){
            state.auth_token = null;
            state.auth_status = false;
            state.auth_info ={
                name:null,
                email:null,
                phone:null,
                image:null,
                id:null,
                utype:null,
                }
        }
    },
}