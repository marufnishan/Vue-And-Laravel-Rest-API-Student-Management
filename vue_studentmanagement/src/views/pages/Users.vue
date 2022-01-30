<template>
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
                                        All Users
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#" class="btn btn-success float-right">Add New</a>
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
                                                <th>Name</th>
                                                <th>Email </th>
                                                <th>Phone </th>
                                                <th>User Type</th>
                                                <th>Change Type</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="item in users" :key="item.id">
                                                <td>{{item.id}}</td>
                                                <td><img :src="item.image" width="60" /></td>
                                                <td>{{item.name}}</td>
                                                <td>{{item.email}}</td>
                                                <td>{{item.phone}}</td>
                                                <td>{{item.utype}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info btn-sm dropdown-toggle"
                                                            type="submit" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Utype
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#"
                                                                    @click="updateUtype(item.id,'tea')">Teacher</a></li>
                                                            <li><a class="dropdown-item" href="#"
                                                                    @click="updateUtype(item.id,'std')">Student</a></li>
                                                        </ul>
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
</template>

<script>
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'Users',
        data() {
            return {
                users: [],
            }
        },
        methods: {
            async loadData() {
                let result = await axios.get("/management/users");
                this.users = result.data;
            },
            async updateUtype(id, utype) {
                await axios.put("/management/update_utype", {
                    id,
                    utype
                });
                alert("User Type Updated");
            },
        },
        created() {
            this.loadData();
        },
        components: {
            SideBar,
            NavBar
        },
    }
</script>

<style scoped>

</style>