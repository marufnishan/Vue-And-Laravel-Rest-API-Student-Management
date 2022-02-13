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
                                <h1>Edit Home Slider</h1>
                            </div>
                            <div class="panel-body">
                                <form @submit.prevent="EditSlider">
                                    <div class="col-md-4">
                                        <input type="file" name="image" class="form-control" accept="image/*"
                                            @change="GetImage">
                                        <!-- <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span> -->
                                        <div class="input-group my-3">
                                            <img :src="'http://localhost:8000/img/HomeSlider/'+form.image" style="height:200px;width:400px;" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control"
                                                v-model="form.id">
                                        <p><b>Status : </b><input type="text" class="form-control"
                                                v-model="form.status"></p>
                                        
                                        <button type="submit" class="btn btn-info pull-right">Update</button>
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
        name: 'ManagementEditHomeSlider',
        data() {
            return {
                form: {
                    id: this.$route.params.id,
                    image: null,
                    status: null,
                },/* 
                errors: {}, */
            }
        },
        methods: {
            GetImage(e) {
                let image = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    this.form.image = e.currentTarget.result
                    console.log(this.form.image)
                }
                
            },
            async EditSlider() {
                await axios.put("/management/edit_homeslider", this.form);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Slider Updated Successfully!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                this.$router.push({
                    name: 'ManagementShowAllHomeSliders'
                })

            },
            async loadData() {
                let result = await axios.get("/management/slider_info/" + this.$route.params.id);
                this.form.image = result.data.image;
                this.form.status = result.data.status;
            },
        },
        created() {
            this.loadData();
        },
    }
</script>