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
                                <h1>Update Profile</h1>
                            </div>
                            <div class="panel-body">
                                <form @submit.prevent="editProfile">
                                    <div class="col-md-4">
                                        <input type="file" name="image" class="form-control" accept="image/*"
                                            @change="GetImage">
                                        <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span>
                                        <div class="input-group my-3">
                                            <img :src="form.image" style="height:100px;width:100px;" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Name : {{getUserInfo.name}}</h3>
                                        <p><b>Email : </b>{{getUserInfo.email}}</p>
                                        <p><b>Phone : </b>{{getUserInfo.phone}}</p>
                                        <p><b>User Id : </b>{{user_id}}</p>
                                        <p><b>User Type : </b>{{getUserInfo.utype}}</p>
                                        <p><b>Student Id : </b><input type="text" class="form-control"
                                                v-model="form.id">
                                        </p>
                                        <span class="text-danger" v-if="errors.id">{{errors.id[0]}}</span>

                                        <h1>Personal Information</h1>
                                        <p><b>Date Of Birth : </b><input type="date" class="form-control"
                                                v-model="form.date_of_birth"></p>
                                        <span class="text-danger"
                                            v-if="errors.date_of_birth">{{errors.date_of_birth[0]}}</span>
                                        <p><b>Gender : </b><input type="text" class="form-control"
                                                v-model="form.gender">
                                        </p>
                                        <span class="text-danger" v-if="errors.gender">{{errors.gender[0]}}</span>
                                        <p><b>Marital Status : </b><input type="text" class="form-control"
                                                v-model="form.maritial_status"></p>
                                        <span class="text-danger"
                                            v-if="errors.maritial_status">{{errors.maritial_status[0]}}</span>
                                        <p><b>Blood Group : </b><input type="text" class="form-control"
                                                v-model="form.blood_group"></p>
                                        <span class="text-danger"
                                            v-if="errors.blood_group">{{errors.blood_group[0]}}</span>
                                        <p><b>Religion : </b><input type="text" class="form-control"
                                                v-model="form.religion"></p>
                                        <span class="text-danger" v-if="errors.religion">{{errors.religion[0]}}</span>
                                        <p><b>Nationality : </b><input type="text" class="form-control"
                                                v-model="form.nationality"></p>
                                        <span class="text-danger"
                                            v-if="errors.nationality">{{errors.nationality[0]}}</span>
                                        <p><b>National Id : </b><input type="text" class="form-control"
                                                v-model="form.national_id"></p>
                                        <span class="text-danger"
                                            v-if="errors.national_id">{{errors.national_id[0]}}</span>
                                        <p><b>Alternative Email : </b><input type="email" class="form-control"
                                                v-model="form.alternate_email"></p>
                                        <span class="text-danger"
                                            v-if="errors.alternate_email">{{errors.alternate_email[0]}}</span>
                                        <p><b>Alternative Phone : </b><input type="text" class="form-control"
                                                v-model="form.alternate_phone"></p>
                                        <span class="text-danger"
                                            v-if="errors.alternate_phone">{{errors.alternate_phone[0]}}</span>
                                        <p><b>Personal Website : </b><input type="text" class="form-control"
                                                v-model="form.personal_website"></p>
                                        <span class="text-danger"
                                            v-if="errors.personal_website">{{errors.personal_website[0]}}</span>
                                        <p><b>Social Network Id : </b><input type="text" class="form-control"
                                                v-model="form.social_id"></p>
                                        <span class="text-danger" v-if="errors.social_id">{{errors.social_id[0]}}</span>

                                        <h1>Guardian Information</h1>
                                        <p><b>Father's Name : </b><input type="text" class="form-control"
                                                v-model="form.father_name"></p>
                                        <span class="text-danger"
                                            v-if="errors.father_name">{{errors.father_name[0]}}</span>
                                        <p><b>Father's Contact No : </b><input type="text" class="form-control"
                                                v-model="form.father_phn"></p>
                                        <span class="text-danger"
                                            v-if="errors.father_phn">{{errors.father_phn[0]}}</span>
                                        <p><b>Father's Occupation : </b><input type="text" class="form-control"
                                                v-model="form.father_occupation"></p>
                                        <span class="text-danger"
                                            v-if="errors.father_occupation">{{errors.father_occupation[0]}}</span>
                                        <p><b>Father's Annual Income : </b><input type="text" class="form-control"
                                                v-model="form.father_income"></p>
                                        <span class="text-danger"
                                            v-if="errors.father_income">{{errors.father_income[0]}}</span>
                                        <p><b>Mother's Name : </b><input type="text" class="form-control"
                                                v-model="form.mother_name"></p>
                                        <span class="text-danger"
                                            v-if="errors.mother_name">{{errors.mother_name[0]}}</span>
                                        <p><b>Mother's Contact No : </b><input type="text" class="form-control"
                                                v-model="form.mother_phn"></p>
                                        <span class="text-danger"
                                            v-if="errors.mother_phn">{{errors.mother_phn[0]}}</span>
                                        <p><b>Mother's Occupation : </b><input type="text" class="form-control"
                                                v-model="form.mother_occupation"></p>
                                        <span class="text-danger"
                                            v-if="errors.mother_occupation">{{errors.mother_occupation[0]}}</span>
                                        <p><b>Mother's Annual Income : </b><input type="text" class="form-control"
                                                v-model="form.mother_income"></p>
                                        <span class="text-danger"
                                            v-if="errors.mother_income">{{errors.mother_income[0]}}</span>
                                        <p><b>Local Guardian's Name : </b><input type="text" class="form-control"
                                                v-model="form.local_gurdian_name"></p>
                                        <span class="text-danger"
                                            v-if="errors.local_gurdian_name">{{errors.local_gurdian_name[0]}}</span>
                                        <p><b>Local Guardian's Contact No : </b><input type="text" class="form-control"
                                                v-model="form.local_gurdian_phn"></p>
                                        <span class="text-danger"
                                            v-if="errors.local_gurdian_phn">{{errors.local_gurdian_phn[0]}}</span>
                                        <p><b>Local Guardian's Address : </b><input type="text" class="form-control"
                                                v-model="form.local_gurdian_address"></p>
                                        <span class="text-danger"
                                            v-if="errors.local_gurdian_address">{{errors.local_gurdian_address[0]}}</span>

                                        <h1>Present Address</h1>
                                        <p><b>Address : </b><input type="text" class="form-control"
                                                v-model="form.address">
                                        </p>
                                        <span class="text-danger" v-if="errors.address">{{errors.address[0]}}</span>
                                        <p><b>Post Office : </b><input type="text" class="form-control"
                                                v-model="form.post_office"></p>
                                        <span class="text-danger"
                                            v-if="errors.post_office">{{errors.post_office[0]}}</span>
                                        <p><b>Police Station : </b><input type="text" class="form-control"
                                                v-model="form.police_station"></p>
                                        <span class="text-danger"
                                            v-if="errors.police_station">{{errors.police_station[0]}}</span>
                                        <p><b>District/City : </b><input type="text" class="form-control"
                                                v-model="form.dictrict"></p>
                                        <span class="text-danger" v-if="errors.dictrict">{{errors.dictrict[0]}}</span>
                                        <p><b>Division/State : </b><input type="text" class="form-control"
                                                v-model="form.division"></p>
                                        <span class="text-danger" v-if="errors.division">{{errors.division[0]}}</span>
                                        <p><b>Country : </b><input type="text" class="form-control"
                                                v-model="form.country">
                                        </p>
                                        <span class="text-danger" v-if="errors.country">{{errors.country[0]}}</span>
                                        <p><b>Zip Code : </b><input type="text" class="form-control"
                                                v-model="form.zip_code"></p>
                                        <span class="text-danger" v-if="errors.zip_code">{{errors.zip_code[0]}}</span>

                                        <h1>Permanent Address</h1>
                                        <p><b>Address : </b><input type="text" class="form-control"
                                                v-model="form.per_address"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_address">{{errors.per_address[0]}}</span>
                                        <p><b>Post Office : </b><input type="text" class="form-control"
                                                v-model="form.per_post_office"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_post_office">{{errors.per_post_office[0]}}</span>
                                        <p><b>Police Station : </b><input type="text" class="form-control"
                                                v-model="form.per_police_station"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_police_station">{{errors.per_police_station[0]}}</span>
                                        <p><b>District/City : </b><input type="text" class="form-control"
                                                v-model="form.per_dictrict"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_dictrict">{{errors.per_dictrict[0]}}</span>
                                        <p><b>Division/State : </b><input type="text" class="form-control"
                                                v-model="form.per_division"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_division">{{errors.per_division[0]}}</span>
                                        <p><b>Country : </b><input type="text" class="form-control"
                                                v-model="form.per_country"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_country">{{errors.per_country[0]}}</span>
                                        <p><b>Zip Code : </b><input type="text" class="form-control"
                                                v-model="form.per_zip_code"></p>
                                        <span class="text-danger"
                                            v-if="errors.per_zip_code">{{errors.per_zip_code[0]}}</span>

                                        <h1>Education</h1>
                                        <p><b>Degree : </b><input type="text" class="form-control"
                                                v-model="form.degree">
                                        </p>
                                        <span class="text-danger" v-if="errors.degree">{{errors.degree[0]}}</span>
                                        <p><b>Degree Name : </b><input type="text" class="form-control"
                                                v-model="form.degree_name"></p>
                                        <span class="text-danger"
                                            v-if="errors.degree_name">{{errors.degree_name[0]}}</span>
                                        <p><b>University : </b><input type="text" class="form-control"
                                                v-model="form.university"></p>
                                        <span class="text-danger"
                                            v-if="errors.university">{{errors.university[0]}}</span>
                                        <p><b>Board : </b><input type="text" class="form-control" v-model="form.board">
                                        </p>
                                        <span class="text-danger" v-if="errors.board">{{errors.board[0]}}</span>
                                        <p><b>Passing Year : </b><input type="text" class="form-control"
                                                v-model="form.passing_year"></p>
                                        <span class="text-danger"
                                            v-if="errors.passing_year">{{errors.passing_year[0]}}</span>
                                        <p><b>Grade/Class/Devision : </b><input type="text" class="form-control"
                                                v-model="form.class_devision"></p>
                                        <span class="text-danger"
                                            v-if="errors.class_devision">{{errors.class_devision[0]}}</span>
                                        <p><b>CGPA : </b><input type="text" class="form-control" v-model="form.cgpa">
                                        </p>
                                        <span class="text-danger" v-if="errors.cgpa">{{errors.cgpa[0]}}</span>
                                        <p><b>Remarks : </b><input type="text" class="form-control"
                                                v-model="form.remarks">
                                        </p>
                                        <span class="text-danger" v-if="errors.remarks">{{errors.remarks[0]}}</span>

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
    import axios from 'axios';
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        components: {
            SideBar,
            NavBar
        },
        name: 'EditProfile',
        computed: {
            getUserInfo() {
                return this.$store.getters.GET_AUTH_INFO;
            }
        },
        data() {
            return {
                form: {},
                user_id: this.$store.getters.GET_AUTH_INFO.id,
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
            editProfile() {
                this.$store.dispatch("EDITPROFILE", this.form)
                    .then((res) => {
                        console.log(res.data)
                        this.$router.push({
                            name: 'Profile'
                        })
                    }).catch((err) => {
                        console.log(err.response.data.errors)
                        this.errors = err.response.data.errors;
                    });
            },
        },
        async mounted() {
            let result = await axios.get("/student/profile/" + this.$store.getters
                .GET_AUTH_INFO.id);
            let data = result.data;
            data.forEach(element => {
                this.form = element
            });
        },
    }
</script>