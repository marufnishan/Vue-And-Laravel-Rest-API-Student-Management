<template>
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
                                    <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span>
                                    <div class="input-group mb-3">
                                    <img :src="avater" style="height:100px;width:100px;" alt="Image">
                                    </div> -->
                                </div>
                                <div class="col-md-8">
                                    <h1><b>Id : </b></h1><input type="text" name="name" class="form-control"
                                        v-model="profile.id">
                                    <h1><b>Name : </b></h1><input type="text" name="name" class="form-control"
                                        v-model="profile.name">

                                    <button type="submit" class="btn btn-info pull-right">Update</button>
                                </div>
                            </form>
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
        components: {
            SideBar,
            NavBar
        },
        name: 'ManagementEditUsers',

        data() {
            return {
                /* errors: {},
                avater:null, */
                profile: {
                    id: this.$route.params.id,
                    name: null,
                }
            }
        },
        methods: {
            async editUser() {
                console.log(this.profile)
                await axios.put("/management/update_user_info", this.profile);
                alert("User Information Updated");
            },
        }

    }
</script>