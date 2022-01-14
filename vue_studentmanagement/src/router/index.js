import {
  createRouter,
  createWebHistory
} from 'vue-router'
import store from '../store'
import Login from '../views/auth/Login.vue'
import Register from '../views/auth/Register.vue'
import Forgot from '../views/auth/password/Forgot.vue'
import Reset from '../views/auth/password/Reset.vue'
import Home from '../views/pages/Home.vue'
import Dashboard from '../views/pages/Dashboard.vue'
import Management from '../views/pages/Management.vue'
import Profile from '../views/pages/Profile.vue'
import Student from '../views/pages/Student.vue'
import Teacher from '../views/pages/Teacher.vue'
import About from '../views/pages/About.vue'

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
    path: '/reset/:token',
    name: 'Reset',
    component: Reset,
    meta: {
      guest: true
    }
  },
  {
    path: '/admin/dashboard',
    name: 'Dashboard',
    component: Dashboard,
    meta: {
      auth: true
    }
  },
  {
    path: '/home',
    name: 'Home',
    component: Home,
    meta: {
      auth: true
    }
  },
  {
    path: '/dashboard/management',
    name: 'Management',
    component: Management,
    meta: {
      auth: true
    }
  },
  {
    path: '/dashboard/profile',
    name: 'Profile',
    component: Profile,
    meta: {
      auth: true
    }
  },
  {
    path: '/dashboard/studentt',
    name: 'Student',
    component: Student,
    meta: {
      auth: true
    }
  },
  {
    path: '/teacher',
    name: 'Teacher',
    component: Teacher,
    meta: {
      auth: true
    }
  },
  {
    path: '/about',
    name: 'About',
    component: About,
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
        name: 'Dashboard'
      })
    } else {
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})

export default router