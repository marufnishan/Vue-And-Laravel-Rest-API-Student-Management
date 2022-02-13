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
                                <h1>Add Home Slider</h1>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form @submit.prevent="AddSlider">
                                        <div class="col-md-4">
                                            <input type="file" name="image" class="form-control" accept="image/*"
                                                @change="GetImage">
                                            <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span>
                                            <div class="input-group my-3">
                                                <img :src="form.image" style="height:200px;width:400px;" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
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
        name: 'ManagementAddHomeSlider',
        data() {
            return {
                form: {
                    image: '',
                },
                errors: {},
            }
        },
        methods: {
            GetImage(e) {
                let image = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    console.log(e)
                    this.form.image = e.currentTarget.result
                }

            },
            async AddSlider() {
                await axios.post("/management/add_homeslider", this.form).then(response => {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        this.$router.push({
                            name: 'ManagementShowAllHomeSliders'
                        })
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors;
                        console.log(error.response.data.errors)
                    });

            }
        },
    }
</script>