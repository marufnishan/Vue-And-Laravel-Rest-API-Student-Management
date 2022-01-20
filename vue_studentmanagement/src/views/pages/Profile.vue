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
                            <div class="col-md-4" v-for="item in profile" :key="item.id">
                                <img :src="item.image"  style="width:100%" alt="User Image">
                                <!-- @if($user->profile->image)
                                    <img src="#" width="100%" />
                                    @else
                                    <img src="#" width="100%" />
                                @endif -->

                                <router-link :to="{name: 'EditProfile'}" href="#" class="btn btn-info pull-right my-5">
                                    Update Profile</router-link>
                            </div>
                            <div class="col-md-4 my-lg-5" >
                                <h1><b>Name :</b> {{getUserInfo.name}} </h1>
                                <h4><b>Email :</b> {{getUserInfo.email}}</h4>
                                <h4><b>Phone : </b> {{getUserInfo.phone}}</h4>
                                <h4 v-for="item in profile" :key="item.id"><b>Student Id : </b>{{item.id}}</h4>
                            </div>
                            <div class="col-md-12" v-for="item in profile" :key="item.id">
                                <h1>Personal Information</h1>
                                <p><b>Date Of Birth : </b>{{item.date_of_birth}}</p>
                                <p><b>Gender : </b>{{item.gender}}</p>
                                <p><b>Marital Status : </b>{{item.maritial_status}}</p>
                                <p><b>Blood Group : </b>{{item.blood_group}}</p>
                                <p><b>Religion : </b>{{item.religion}}</p>
                                <p><b>Nationality : </b>{{item.nationality}}</p>
                                <p><b>National Id : </b>{{item.national_id}}</p>
                                <p><b>Alternative Email : </b>{{item.alternate_email}}</p>
                                <p><b>Alternative Phone : </b>{{item.alternate_phone}}</p>
                                <p><b>Personal Website : </b>{{item.personal_website}}</p>
                                <p><b>Social Network Id : </b>{{item.social_id}}</p>
                                <hr>
                                <h1>Guardian Information</h1>
                                <p><b>Father's Name : </b>{{item.father_name}}</p>
                                <p><b>Father's Contact No : </b>{{item.father_phn}}</p>
                                <p><b>Father's Occupation : </b>{{item.father_occupation}}</p>
                                <p><b>Father's Annual Income : </b>{{item.father_income}}</p>
                                <p><b>Mother's Name : </b>{{item.mother_name}}</p>
                                <p><b>Mother's Contact No : </b>{{item.mother_phn}}</p>
                                <p><b>Mother's Occupation : </b>{{item.mother_occupation}}</p>
                                <p><b>Mother's Annual Income : </b>{{item.mother_income}}</p>
                                <p><b>Local Guardian's Name : </b>{{item.local_gurdian_name}}</p>
                                <p><b>Local Guardian's Contact No : </b>{{item.local_gurdian_phn}}</p>
                                <p><b>Local Guardian's Address : </b>{{item.local_gurdian_address}}</p>
                                <hr>
                                <h1>Present Address</h1>
                                <p><b>Address : </b>{{item.address}}</p>
                                <p><b>Post Office : </b>{{item.post_office}}</p>
                                <p><b>Police Station : </b>{{item.police_station}}</p>
                                <p><b>District/City : </b>{{item.dictrict}}</p>
                                <p><b>Division/State : </b>{{item.division}}</p>
                                <p><b>Country : </b>{{item.country}}</p>
                                <p><b>Zip Code : </b>{{item.zip_code}}</p>
                                <hr>
                                <h1>Permanent Address</h1>
                                <p><b>Address : </b>{{item.per_address}}</p>
                                <p><b>Post Office : </b>{{item.per_post_office}}</p>
                                <p><b>Police Station : </b>{{item.per_police_station}}</p>
                                <p><b>District/City : </b>{{item.per_dictrict}}</p>
                                <p><b>Division/State : </b>{{item.per_division}}</p>
                                <p><b>Country : </b>{{item.per_country}}</p>
                                <p><b>Zip Code : </b>{{item.per_zip_code}}</p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="panel md-whiteframe-2dp">
                                    <div class="panel-heading" v-for="item in profile" :key="item.id">
                                        <h1 class="panel-title">Education and Training</h1>
                                    </div>
                                    <div class="panel-body" v-for="item in profile" :key="item.id">
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
                                                        <td>{{item.degree}}</td>
                                                        <td>{{item.degree_name}}</td>
                                                        <td>{{item.university}}</td>
                                                        <td>{{item.board}}</td>
                                                        <td>{{item.passing_year}}</td>
                                                        <td>{{item.class_devision}}</td>
                                                        <td>{{item.cgpa}}</td>
                                                        <td>{{item.remarks}}</td>
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
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    
    export default {
        name: 'Profile',
        data() {
            return {
                profile: [],
            }
        },
        methods: {
            async loadData() {
                let result = await axios.get("/student/profile/" + this.$store.getters
                    .GET_AUTH_INFO.id);
                this.profile = result.data;
            }
            
        },
        components: {
            SideBar,
            NavBar
        },
        computed: {
            getUserInfo() {
                return this.$store.getters.GET_AUTH_INFO;
            }
        },
        mounted() {
            this.loadData();
            
        },
    }
</script>