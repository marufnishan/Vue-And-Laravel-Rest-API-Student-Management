<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Password Reset Page</b></a>
                </div>
                <div class="card-body">

                    <form @submit.prevent="passwordReset">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-bind:value="form.token">
                        </div>
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
                            <div class="col-6">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
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
import {useRoute} from 'vue-router'
    export default {
        name:'Reset',
        
        data() {
            return {
                form: {
                    password: null,
                    confirm_password: null,
                    token: null,
                },
                errors: {},
            }
        },
        mounted(){
            const route=useRoute();
            this.form.token=route.params.token
        },
        methods: {
            passwordReset() {
                this.$store.dispatch("RESET", this.form)
                    .then((res) => {
                        console.log(res.data)
                        this.$router.push({
                            name: 'Login'
                        })
                    }).catch((err) => {
                        console.log(err.response.data.errors)
                        this.errors = err.response.data.errors;
                    });
            }
        },
    }
</script>