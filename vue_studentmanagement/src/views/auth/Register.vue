<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Registration Page</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register to start your session</p>

                    <form @submit.prevent="userRegister">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-model="form.name" placeholder="Name...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" v-if="errors.name">{{errors.name[0]}}</span>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" v-model="form.email" placeholder="Email...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-model="form.phone" placeholder="Phone...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" v-if="errors.phone">{{errors.phone[0]}}</span>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*" @change="GetImage" >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <img :src="avater" style="height:100px;width:100px;" alt="Image">
                        </div>
                        <span class="text-danger" v-if="errors.phone">{{errors.image[0]}}</span>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" v-model="form.password" placeholder="Password...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" v-if="errors.password">{{errors.password[0]}}</span>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" v-model="form.password_confirmation" placeholder="Confirm-Password...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mb-0">
                        <router-link :to="{name:'Login'}" class="text-center">Go to Login Page</router-link>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</template>
<script>
    export default {
        name:'Register',
        data() {
            return {
                form: {
                    name:null,
                    phone:null,
                    email: null,
                    password: null,
                    confirm_password: null,
                    image:this,
                },
                errors: {},
                avater:null,
            }
        },
        methods: {
            GetImage( e ){
                let image = e.target.files[0]
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    console.log(e)
                    this.avater = e.currentTarget.result
                    console.log(this.avater)
                    this.form.image = this.avater
                }
			},
            userRegister() {
                this.$store.dispatch("REGISTRATION", this.form)
                    .then((res) => {
                        console.log(res.data)
                        this.$router.push({
                            name: 'Home'
                        })
                    }).catch((err) => {
                        console.log(err.response.data.errors)
                        this.errors = err.response.data.errors;
                    });
            },
        },
    }
</script>