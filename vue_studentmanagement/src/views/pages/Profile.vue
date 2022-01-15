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
                                
                                <router-link :to="{name: 'EditProfile'}" href="#" class="btn btn-info pull-right my-5">Update Profile</router-link>
                            </div>
                            <div class="col-md-8">
                                <h3>Name : {{getUserInfo.name}} </h3>
                                <p><b>Email :</b> {{getUserInfo.email}}</p>
                                <p><b>Phone : </b> {{getUserInfo.phone}}</p>
                                <p><b>Student Id : </b> </p>
                                <hr>
                                <h1>Personal Information</h1>
                                <p><b>Date Of Birth : </b></p>
                                <p><b>Gender : </b></p>
                                <p><b>Marital Status : </b></p>
                                <p><b>Blood Group : </b></p>
                                <p><b>Religion : </b></p>
                                <p><b>Nationality : </b></p>
                                <p><b>National Id : </b></p>
                                <p><b>Alternative Email : </b></p>
                                <p><b>Alternative Phone : </b></p>
                                <p><b>Personal Website : </b></p>
                                <p><b>Social Network Id : </b></p>
                                <hr>
                                <h1>Guardian Information</h1>
                                <p><b>Father's Name : </b></p>
                                <p><b>Father's Contact No : </b></p>
                                <p><b>Father's Occupation : </b></p>
                                <p><b>Father's Annual Income : </b></p>
                                <p><b>Mother's Name : </b></p>
                                <p><b>Mother's Contact No : </b></p>
                                <p><b>Mother's Occupation : </b></p>
                                <p><b>Mother's Annual Income : </b></p>
                                <p><b>Local Guardian's Name : </b></p>
                                <p><b>Local Guardian's Contact No : </b></p>
                                <p><b>Local Guardian's Address : </b></p>
                                <hr>
                                <h1>Present Address</h1>
                                <p><b>Address : </b></p>
                                <p><b>Post Office : </b></p>
                                <p><b>Police Station : </b></p>
                                <p><b>District/City : </b></p>
                                <p><b>Division/State : </b></p>
                                <p><b>Country : </b></p>
                                <p><b>Zip Code : </b></p>
                                <hr>
                                <h1>Permanent Address</h1>
                                <p><b>Address : </b></p>
                                <p><b>Post Office : </b></p>
                                <p><b>Police Station : </b></p>
                                <p><b>District/City : </b></p>
                                <p><b>Division/State : </b></p>
                                <p><b>Country : </b></p>
                                <p><b>Zip Code : </b></p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="panel md-whiteframe-2dp">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Education and Training</h1>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-panel-success">
                                                <thead>
                                                    <tr>
                                                        <th>Degree</th>
                                                        <th>Degree Name</th>
                                                        <th>University</th>
                                                        <th>Board</th>
                                                        <th>Passing Year</th>
                                                        <th>Grade/Class/Devision</th>
                                                        <th>CGPA</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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