import axios from 'axios'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

axios.defaults.headers.common['Authorization'] = 'Bearer '+ store.getters.GET_AUTH_TOKEN;

createApp(App).use(store).use(router).mount('#app')
