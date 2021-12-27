<template>
  <div>
    <div class="wrapper">

      <!-- Preloader -->
      <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div> -->

      <!-- Navbar -->
      <nav-bar v-if="loggedInStatus"></nav-bar>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <side-bar v-if="loggedInStatus"></side-bar>

      <!-- Content Wrapper. Contains page content -->
      <router-view></router-view>
      <!-- /.content-wrapper -->
      
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  </div>
  <!-- <router-view/> -->
</template>

<script>
import NavBar from './components/NavBar.vue';
import SideBar from './components/SideBar.vue';
export default{
  components: {NavBar, SideBar},

  data(){
    return{
      auth:false
    }
  },
  computed:{
    loggedInStatus(){
      return this.$store.getters.GET_AUTH_STATUS;
    }
  }
}
</script>
