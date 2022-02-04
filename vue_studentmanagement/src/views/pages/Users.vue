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
                                            All Users
                                        </div>
                                        <div class="col-md-4">
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
                                                    <th>Action</th>

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
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#"
                                                                        @click="updateUtype(item.id,'tea')">Teacher</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"
                                                                        @click="updateUtype(item.id,'std')">Student</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <router-link :to="'/management/update_user_info/'+item.id"
                                                                href=""><i class="btn btn-success fas fa-edit mr-3"></i>
                                                            </router-link>
                                                            <i class="btn btn-danger fas fa-trash-alt"
                                                                v-on:click="deleteUser(item.id)"></i>
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
    import Swal from 'sweetalert2'
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
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'User Type Updated Succesfully !!',
                    showConfirmButton: false,
                    timer: 1500
                })
                this.loadData();
            },
            async deleteUser(id) {
                 
                await Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete("/management/delete_user_info/" + id);
                        Swal.fire(
                            'Deleted!',
                            'User has been deleted.',
                            'success'
                        )
                    }
                })
                this.loadData();
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