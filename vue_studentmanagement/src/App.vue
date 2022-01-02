<template>
  <div>
    <div class="wrapper">


      

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

export default{

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
