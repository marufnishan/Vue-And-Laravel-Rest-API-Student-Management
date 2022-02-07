<template>
    <div>
        <nav-bar></nav-bar>
        <side-bar></side-bar>
        <div class="content-wrapper">
            <div>
                <div class="container  py-3 p-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading p-3"
                                    style="background:linear-gradient(45deg,#00897B,#0081bf);">
                                    <div class="row">
                                        <div class="col-md-8">
                                            All HomeSliders
                                        </div>

                                        <div class="col-md-2">
                                            <router-link :to="{name: 'ManagementAddHomeSlider'}" href="#"
                                                class="btn btn-success float-right">Add New</router-link>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" placeholder="Search...." />
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead style="background-color:#31D2F2;">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="item in HomeSliders" :key="item.id">
                                                    <td>{{item.id}}</td>
                                                    <td><img :src="'http://localhost:8000/img/HomeSlider/'+item.image" width="100" /></td>
                                                    <td>{{item.status}}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#">
                                                                <i class="btn btn-success fas fa-edit mr-3"></i>
                                                            </a>
                                                            <i class="btn btn-danger fas fa-trash-alt"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'ManagementShowAllHomeSliders',
        components: {
            SideBar,
            NavBar
        },
        data() {
            return {
                HomeSliders: [],
            }
        },
        methods: {
            async loadData() {
                let result = await axios.get("/management/show/homeslider");
                this.HomeSliders = result.data;
                console.log(this.HomeSliders)
            },
        },
        created() {
            this.loadData();
        },
    }
</script>

<style scoped>

</style>