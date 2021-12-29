import {
  createRouter,
  createWebHistory
} from 'vue-router'
import store from '../store'
import Login from '../views/auth/Login.vue'
import Register from '../views/auth/Register.vue'
import Forgot from '../views/auth/password/Forgot.vue'
import Home from '../views/pages/Home.vue'

const routes = [{
    path: '/',
    name: 'Login',
    component: Login,
    meta: {
      guest: true
    }
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
    meta: {
      guest: true
    }
  },
  {
    path: '/forgot',
    name: 'Forgot',
    component: Forgot,
    meta: {
      guest: true
    }
  },
  {
    path: '/admin/dashboard',
    name: 'Home',
    component: Home,
    meta: {
      auth: true
    }
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.auth)) {
    if (!store.getters.GET_AUTH_STATUS) {
      next({
        name: 'Login'
      })
    } else {
      next()
    }
  }


  else if (to.matched.some(record => record.meta.guest)) {
    if (store.getters.GET_AUTH_STATUS) {
      next({
        name: 'Home'
      })
    } else {
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})

export default router