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
                                <h1>Add Settings</h1>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form  @submit.prevent="AddSettings">
                                        <div class="col-md-4">
                                            <p>ID : <input type="text" class="form-control" v-model="settings.id"></p>
                                            <p>Name : <input type="text" class="form-control" v-model="settings.name"></p>
                                            <p>Logo :</p>
                                            <input type="file" name="logo" class="form-control" accept="image/*"
                                                @change="GetImage">
                                            <!-- <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span> -->
                                            
                                            <div class="input-group my-3">
                                                <img :src="'http://localhost:8000/img/logo/'+settings.logo" style="height:200px;width:400px;" alt="Image">
                                            </div>
                                            <p>Email : <input type="email" class="form-control" v-model="settings.email"></p>
                                            <p>Phone : <input type="text" class="form-control" v-model="settings.phone"></p>
                                            <p>Phone2 : <input type="text" class="form-control" v-model="settings.phone2"></p>
                                            <p>Location : <input type="text" class="form-control" v-model="settings.location"></p>
                                            <p>Map : <input type="text" class="form-control" v-model="settings.map"></p>
                                            <p>Twiter : <input type="text" class="form-control" v-model="settings.twiter"></p>
                                            <p>Facebook : <input type="text" class="form-control" v-model="settings.facebook"></p>
                                            <p>Instagram : <input type="text" class="form-control" v-model="settings.instagram"></p>
                                            <p>Youtube : <input type="text" class="form-control" v-model="settings.youtube"></p>
                                        </div>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-info pull-right">Add Settings</button>
                                        </div>
                                    </form>
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
    import axios from 'axios';
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'AddSettings',
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
            GetImage(e) {
                let image = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    console.log(e)
                    this.settings.logo = e.currentTarget.result
                }
            },
            async AddSettings() {
                console.log(this.settings);
                await axios.post("/management/settings", this.settings).then(response => {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors;
                        console.log(error.response.data.errors)
                    });

            },/* 
            async loadData() {
                let result = await axios.get("/management/settings_info");
                this.settings = result.data;
                console.log(this.settings.logo);
            }, */
        },
        
        /* created() {
            this.loadData();

        }, */
    }
</script>

<style scoped>

</style>