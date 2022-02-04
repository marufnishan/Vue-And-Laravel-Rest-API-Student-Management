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
                                <h1>Update User Information</h1>
                            </div>
                            <div class="panel-body">
                                <form @submit.prevent="editUser">
                                    <div class="col-md-4">
                                        <!-- <input type="file" name="image" class="form-control" accept="image/*" @change="GetImage" >
                                    <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span> -->
                                        <div class="input-group mb-3">
                                            <img :src="profile.image" style="height:100px;width:100px;" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h1><b>Id : </b></h1><input type="text" name="name" class="form-control"
                                            v-model="profile.id">
                                        <h1><b>Name : </b></h1><input type="text" name="name" class="form-control"
                                            v-model="profile.name">

                                        <button type="submit" class="btn btn-info pull-right mt-3">Update</button>
                                    </div>
                                </form>
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
    import axios from 'axios';
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        components: {
            SideBar,
            NavBar
        },
        name: 'ManagementEditUsers',

        data() {
            return {
                profile: {
                    id: this.$route.params.id,
                    name: null,
                    image: null,
                }
            }
        },
        methods: {
            async editUser() {
                await axios.put("/management/update_user_info", this.profile);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'User Information Updated Successfully!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                this.$router.push({
                    name: 'Users'
                })
            },
            async loadData() {
                let result = await axios.get("/management/user_info/" + this.$route.params.id);
                this.profile.name = result.data.name;
                this.profile.image = result.data.image;
            },
        },
        created() {
            this.loadData();
        },

    }
</script>