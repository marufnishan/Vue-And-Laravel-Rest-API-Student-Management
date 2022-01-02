<template>
    <div>
        <h1 style="width:400px;margin:auto;">Welcome To Home Page</h1>
        <router-link :to="{name: 'Dashboard'}" style="width:200px;margin:auto;" class="nav-link active">
                  <h2>
                    Dashboard
                  </h2>
        </router-link>
    </div>
</template>
<script>
export default{
    name:'Student',
}
</script>