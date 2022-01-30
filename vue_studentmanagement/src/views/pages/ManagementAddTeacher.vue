<template>
    <nav-bar></nav-bar>
    <side-bar></side-bar>
    <div class="content-wrapper">
        <div>
            <div class="container ml-md-5 py-5">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading py-3">
                            <h1>Add Teacher</h1>
                        </div>
                        <div class="panel-body">
                            <form @submit.prevent="addTeacher">
                                <div class="col-md-4">
                                    <!-- <input type="file" name="image" class="form-control" accept="image/*" @change="GetImage" >
                            <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span> -->
                                    <!--  @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                            @elseif($image)
                                <img src="{{asset('assets/images/profile')}}/{{$image}}" width="100%" />
                            @else
                                <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                            @endif -->
                                    <!-- <div class="input-group mb-3">
                            <img :src="avater" style="height:100px;width:100px;" alt="Image">
                            </div> -->
                                </div>
                                <div class="col-md-8">
                                    <h3>Name : <input type="text" class="form-control" v-model="form.name"></h3>
                                    <p><b>Email : </b><input type="email" class="form-control" v-model="form.email"></p>
                                    <p><b>Phone : </b><input type="text" class="form-control" v-model="form.phone"></p>
                                    <p><b>Id : </b><input type="text" class="form-control" v-model="form.id"></p>
                                    <p><b>User Id : </b><input type="text" class="form-control" v-model="form.user_id">
                                    </p>
                                    <p><b>Subject : </b><input type="text" class="form-control" v-model="form.subject"></p>
                                    <p><b>Designation : </b><input type="text" class="form-control" v-model="form.designation"></p>
                                    <p><b>Salary : </b><input type="text" class="form-control" v-model="form.salary"></p>
                                    <!-- <span class="text-danger" v-if="errors.id">{{errors.id[0]}}</span> -->

                                    <h1>Personal Information</h1>
                                    <p><b>Date Of Birth : </b><input type="date" class="form-control"
                                            v-model="form.date_of_birth"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.date_of_birth">{{errors.date_of_birth[0]}}</span> -->
                                    <p><b>Gender : </b><input type="text" class="form-control" v-model="form.gender">
                                    </p>
                                   <!--  <span class="text-danger" v-if="errors.gender">{{errors.gender[0]}}</span> -->
                                    <p><b>Marital Status : </b><input type="text" class="form-control"
                                            v-model="form.maritial_status"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.maritial_status">{{errors.maritial_status[0]}}</span> -->
                                    <p><b>Blood Group : </b><input type="text" class="form-control"
                                            v-model="form.blood_group"></p>
                                    <!-- <span class="text-danger" v-if="errors.blood_group">{{errors.blood_group[0]}}</span> -->
                                    <p><b>Religion : </b><input type="text" class="form-control"
                                            v-model="form.religion"></p>
                                    <!-- <span class="text-danger" v-if="errors.religion">{{errors.religion[0]}}</span> -->
                                    <p><b>Nationality : </b><input type="text" class="form-control"
                                            v-model="form.nationality"></p>
                                   <!--  <span class="text-danger" v-if="errors.nationality">{{errors.nationality[0]}}</span> -->
                                    <p><b>National Id : </b><input type="text" class="form-control"
                                            v-model="form.national_id"></p>
                                    <!-- <span class="text-danger" v-if="errors.national_id">{{errors.national_id[0]}}</span> -->
                                    <p><b>Alternative Email : </b><input type="email" class="form-control"
                                            v-model="form.alternate_email"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.alternate_email">{{errors.alternate_email[0]}}</span> -->
                                    <p><b>Alternative Phone : </b><input type="text" class="form-control"
                                            v-model="form.alternate_phone"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.alternate_phone">{{errors.alternate_phone[0]}}</span> -->
                                    <p><b>Personal Website : </b><input type="text" class="form-control"
                                            v-model="form.personal_website"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.personal_website">{{errors.personal_website[0]}}</span> -->
                                    <p><b>Social Network Id : </b><input type="text" class="form-control"
                                            v-model="form.social_id"></p>
                                   <!--  <span class="text-danger" v-if="errors.social_id">{{errors.social_id[0]}}</span> -->

                                    <h1>Present Address</h1>
                                    <p><b>Address : </b><input type="text" class="form-control" v-model="form.address">
                                    </p>
                                    <!-- <span class="text-danger" v-if="errors.address">{{errors.address[0]}}</span> -->
                                    <p><b>Post Office : </b><input type="text" class="form-control"
                                            v-model="form.post_office"></p>
                                    <!-- <span class="text-danger" v-if="errors.post_office">{{errors.post_office[0]}}</span> -->
                                    <p><b>Police Station : </b><input type="text" class="form-control"
                                            v-model="form.police_station"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.police_station">{{errors.police_station[0]}}</span> -->
                                    <p><b>District/City : </b><input type="text" class="form-control"
                                            v-model="form.dictrict"></p>
                                    <!-- <span class="text-danger" v-if="errors.dictrict">{{errors.dictrict[0]}}</span> -->
                                    <p><b>Division/State : </b><input type="text" class="form-control"
                                            v-model="form.division"></p>
                                    <!-- <span class="text-danger" v-if="errors.division">{{errors.division[0]}}</span> -->
                                    <p><b>Country : </b><input type="text" class="form-control" v-model="form.country">
                                    </p>
                                    <!-- <span class="text-danger" v-if="errors.country">{{errors.country[0]}}</span> -->
                                    <p><b>Zip Code : </b><input type="text" class="form-control"
                                            v-model="form.zip_code"></p>
                                    <!-- <span class="text-danger" v-if="errors.zip_code">{{errors.zip_code[0]}}</span> -->
                                    
                                    <h1>Education</h1>
                                    <p><b>Degree : </b><input type="text" class="form-control" v-model="form.degree">
                                    </p>
                                    <!-- <span class="text-danger" v-if="errors.degree">{{errors.degree[0]}}</span> -->
                                    <p><b>Degree Name : </b><input type="text" class="form-control"
                                            v-model="form.degree_name"></p>
                                    <!-- <span class="text-danger" v-if="errors.degree_name">{{errors.degree_name[0]}}</span> -->
                                    <p><b>University : </b><input type="text" class="form-control"
                                            v-model="form.university"></p>
                                    <!-- <span class="text-danger" v-if="errors.university">{{errors.university[0]}}</span> -->
                                    <p><b>Board : </b><input type="text" class="form-control" v-model="form.board"></p>
                                    <!-- <span class="text-danger" v-if="errors.board">{{errors.board[0]}}</span> -->
                                    <p><b>Passing Year : </b><input type="text" class="form-control"
                                            v-model="form.passing_year"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.passing_year">{{errors.passing_year[0]}}</span> -->
                                    <p><b>Grade/Class/Devision : </b><input type="text" class="form-control"
                                            v-model="form.class_devision"></p>
                                    <!-- <span class="text-danger"
                                        v-if="errors.class_devision">{{errors.class_devision[0]}}</span> -->
                                    <p><b>CGPA : </b><input type="text" class="form-control" v-model="form.cgpa"></p>
                                    <!-- <span class="text-danger" v-if="errors.cgpa">{{errors.cgpa[0]}}</span> -->
                                    <p><b>Remarks : </b><input type="text" class="form-control" v-model="form.remarks">
                                    </p>
                                    <!-- <span class="text-danger" v-if="errors.remarks">{{errors.remarks[0]}}</span> -->
                                    <button type="submit" class="btn btn-info pull-right">Update</button>
                                </div>
                            </form>
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
        name: 'ManagementAddTeacher',
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    phone: '',
                    id: '',
                    user_id: '',
                    subject: '',
                    designation: '',
                    salary: '',
                    /* image:'', */
                    date_of_birth: '',
                    gender: '',
                    maritial_status: '',
                    blood_group: '',
                    religion: '',
                    nationality: '',
                    national_id: '',
                    alternate_email: '',
                    alternate_phone: '',
                    personal_website: '',
                    social_id: '',
                    address: '',
                    post_office: '',
                    police_station: '',
                    dictrict: '',
                    division: '',
                    country: '',
                    zip_code: '',
                    degree: '',
                    degree_name: '',
                    university: '',
                    board: '',
                    passing_year: '',
                    class_devision: '',
                    cgpa: '',
                    remarks: '',
                },
            }
        },
        methods: {

            async addTeacher() {
                await axios.post("/management/add/teacher", {
                    name: this.form.name,
                    email: this.form.email,
                    phone: this.form.phone,

                    id: this.form.id,
                    user_id: this.form.user_id,
                    subject: this.form.subject,
                    designation: this.form.designation,
                    salary: this.form.salary,
                    /* image:null, */
                    date_of_birth: this.form.date_of_birth,
                    gender: this.form.gender,
                    maritial_status: this.form.maritial_status,
                    blood_group: this.form.blood_group,
                    religion: this.form.religion,
                    nationality: this.form.nationality,
                    national_id: this.form.national_id,
                    alternate_email: this.form.alternate_email,
                    alternate_phone: this.form.alternate_phone,
                    personal_website: this.form.personal_website,
                    social_id: this.form.social_id,
                    address: this.form.address,
                    post_office: this.form.post_office,
                    police_station: this.form.police_station,
                    dictrict: this.form.dictrict,
                    division: this.form.division,
                    country: this.form.country,
                    zip_code: this.form.zip_code,
                    degree: this.form.degree,
                    degree_name: this.form.degree_name,
                    university: this.form.university,
                    board: this.form.board,
                    passing_year: this.form.passing_year,
                    class_devision: this.form.class_devision,
                    cgpa: this.form.cgpa,
                    remarks: this.form.remarks,
                });
                alert("Teacher Added");
            }
        }
    }
</script>

<style scoped>

</style>