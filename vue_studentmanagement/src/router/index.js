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
import EditProfile from '../views/pages/EditProfile.vue'
import Teacher from '../views/pages/Teacher.vue'
import Users from '../views/pages/Users.vue'
import ManagementEditUsers from '../views/pages/ManagementEditUsers.vue'
import ManagementShowAllTeachers from '../views/pages/ManagementShowAllTeachers.vue'
import ManagementAddTeacher from '../views/pages/ManagementAddTeacher.vue'
import ManagementShowAllStudents from '../views/pages/ManagementShowAllStudents.vue'
import About from '../views/pages/About.vue'

const routes = [{
    path: '/login',
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
    path: '/',
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
    path: '/dashboard/editprofile',
    name: 'EditProfile',
    component: EditProfile,
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
    path: '/management/add/teacher',
    name: 'ManagementAddTeacher',
    component: ManagementAddTeacher,
    meta: {
      auth: true
    }
  },
  {
    path: '/management/users',
    name: 'Users',
    component: Users,
    meta: {
      auth: true
    }
  },
  {
    path: '/management/update_user_info',
    name: 'ManagementEditUsers',
    component: ManagementEditUsers,
    meta: {
      auth: true
    }
  },
  {
    path: '/management/show/teachers',
    name: 'ManagementShowAllTeachers',
    component: ManagementShowAllTeachers,
    meta: {
      auth: true
    }
  },
  {
    path: '/management/show/students',
    name: 'ManagementShowAllStudents',
    component: ManagementShowAllStudents,
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