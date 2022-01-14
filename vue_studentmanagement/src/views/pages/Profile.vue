<template>
    <nav-bar></nav-bar>
    <side-bar></side-bar>
    <div class="content-wrapper">
        <div>
            <div class="container" style="padding: 30px 20px">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profile
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img :src="getUserInfo.image" style="width:100%" alt="User Image">
                                <!-- @if($user->profile->image)
                                    <img src="#" width="100%" />
                                    @else
                                    <img src="#" width="100%" />
                                @endif -->
                            </div>
                            <div class="col-md-8">
                                <h3>Name : {{getUserInfo.name}} </h3>
                                <p><b>Email :</b> {{getUserInfo.email}}</p>
                                <p><b>Phone : </b> {{getUserInfo.phone}}</p>
                                <hr>
                                <p><b>Line1 : </b></p>
                                <p><b>Line2 : </b></p>
                                <p><b>City : </b></p>
                                <p><b>Province : </b></p>
                                <p><b>Country : </b></p>
                                <p><b>Zip Code : </b></p>
                                <a href="#" class="btn btn-info pull-right">Update Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>
<script>
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        components: {
            SideBar,
            NavBar
        },
        name: 'Profile',
        computed: {
            getUserInfo() {
                return this.$store.getters.GET_AUTH_INFO;
            }
        },
    }
</script>