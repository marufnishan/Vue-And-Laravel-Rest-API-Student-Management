<template>
    <div>
        <nav-bar></nav-bar>
        <side-bar></side-bar>
        <div class="content-wrapper">
            <div>
                <div class="container ml-md-5 py-5">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading py-3">
                                <router-link :to="{name: 'AddSettings'}" href=""><button class="btn btn-info">Add Settings</button></router-link>
                                <router-link :to="{name: 'EditSettings'}" href=""><button class="btn btn-info ml-3">Edit Settings</button></router-link>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                        <div class="col-md-4">
                                            <label>ID:</label>  {{settings.id}}<br>
                                            <label>Name :</label>  {{settings.name}}<br>
                                            <label>Logo :</label> 
                                            <div class="input-group my-3">
                                                <img :src="'http://localhost:8000/img/logo/'+settings.logo" style="height:200px;width:400px;" alt="Image">
                                            </div><br>
                                            <label>Email :</label>  {{settings.email}}<br>
                                            <label>Phone :</label>  {{settings.phone}}<br>
                                            <label>Phone2 :</label>  {{settings.phone2}}<br>
                                            <label>Location :</label>  {{settings.location}}<br>
                                            <label>Map :</label>  {{settings.map}}<br>
                                            <label>Twiter :</label>  {{settings.twiter}}<br>
                                            <label>Facebook :</label>  {{settings.facebook}}<br>
                                            <label>Instagram :</label>  {{settings.instagram}}<br>
                                            <label>Youtube :</label>  {{settings.youtube}}<br>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'Settings',
        data() {
            return {
                settings: {},
            }
        },
        components: {
            SideBar,
            NavBar
        },
        methods: {
            async loadData() {
                let result = await axios.get("/management/settings_info");
                this.settings = result.data;
                console.log(this.settings.logo);
            },
        },
        
        created() {
            this.loadData();

        },
    }
</script>

<style scoped>

</style>