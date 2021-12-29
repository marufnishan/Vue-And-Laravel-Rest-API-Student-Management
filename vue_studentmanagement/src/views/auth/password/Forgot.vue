<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Password Reset</b></a>
                </div>
                <div class="card-body">
                    <form @submit.prevent="forgetPassword">
                        <div v-if="msg">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{msg.message}}</strong>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" v-model="form.email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-2"></div>
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary btn-block">Password Reset Request</button>
                            </div>
                            <div class="col-2"></div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mb-0 mt-2">
                        <router-link :to="{name:'Login'}" class="text-center">Return To Login</router-link>
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
        name: "Forgot",

        data() {
            return {
                form: {
                    email: null,
                },
                errors: {},
                msg:null,
            }
        },
        methods: {
            forgetPassword() {
                this.$store.dispatch("FORGOT", this.form)
                    .then((res) => {
                        console.log(res.data)
                        this.msg = res.data
                        this.form.email = null
                    }).catch((err) => {
                        console.log(err.response.data.errors)
                        this.errors = err.response.data.errors;
                    });
            }
        },
    }
</script>