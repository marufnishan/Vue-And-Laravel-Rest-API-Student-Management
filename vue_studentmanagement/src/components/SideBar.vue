<template>
  <div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <router-link :to="{name: 'Home'}" href="index3.html" class="brand-link">
        <i class="fa fa-graduation-cap mr-3 ml-3"></i>
        <span class="brand-text font-weight-light">NISHAN</span>
      </router-link>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img :src="'http://localhost:8000/img/Profile/'+getUserInfo.image" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{getUserInfo.name}}</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li v-if="getUserInfo.utype=== 'std'" class="nav-item menu-open">
              <router-link :to="{name: 'Dashboard'}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Student
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <router-link :to="{name: 'Profile'}" href="#" class="nav-link">
                    <i class="nav-icon far fa-user text-light"></i>
                    <p>Profile</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link :to="{name: 'EditProfile'}" href="#" class="nav-link">
                    <i class="nav-icon far fa-user text-light"></i>
                    <p>Update Profile</p>
                  </router-link>
                </li>
              </ul>
            </li>
            <li v-if="getUserInfo.utype=== 'man'" class="nav-item menu-open">
              <router-link :to="{name: 'Dashboard'}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link active-class="active" exact :to="{name: 'ManagementShowAllStudents'}" href="#" class="nav-link">
                    <i class="nav-icon fa fa-user-graduate "></i>
                    <p>Student</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link active-class="active" exact :to="{name: 'ManagementShowAllTeachers'}" href="#" class="nav-link">
                    <i class="nav-icon fa fa-user-tie "></i>
                    <p>Teacher</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link active-class="active" exact :to="{name: 'Users'}" href="#" class="nav-link">
                    <i class="nav-icon far fa-user "></i>
                    <p>User</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link active-class="active" exact :to="{name: 'ManagementShowAllHomeSliders'}" href="#" class="nav-link">
                    <i class="nav-icon fa fa-images"></i>
                    <p>Home Slider</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link active-class="active" exact :to="{name: 'Settings '}" href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs "></i>
                    <p>Settings </p>
                  </router-link>
                </li>
              </ul>
            </li>
            <li v-if="getUserInfo.utype=== 'tea'" class="nav-item menu-open">
              <router-link :to="{name: 'Dashboard'}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Teacher
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <router-link :to="{name: 'Management'}" href="#" class="nav-link">
                    <i class="nav-icon far fa-user text-light"></i>
                    <p>Management</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-user text-light"></i>
                    <p>Student</p>
                  </a>
                </li>
                <li class="nav-item">
                  <router-link :to="{name: 'Teacher'}" href="#" class="nav-link">
                    <i class="nav-icon far fa-user text-light"></i>
                    <p>Teacher</p>
                  </router-link>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" @click.prevent="userLogout">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>
</template>
<script>
  export default {
    name: 'SideBar',
    computed: {
      getUserInfo() {
        return this.$store.getters.GET_AUTH_INFO;
      }
    },
    methods: {
      userLogout() {
        this.$store.dispatch("LOGOUT")
          .then((res) => {
            console.log(res.data)
            this.$router.push({
              name: 'Login'
            })
          }).catch(() => {});
      }
    },
  }
</script>