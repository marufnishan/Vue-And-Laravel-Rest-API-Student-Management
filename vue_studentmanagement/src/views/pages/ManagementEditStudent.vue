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
                            <h1>Edit Student</h1>
                        </div>
                        <div class="panel-body">
                            <form @submit.prevent="editStudent">
                                <div class="col-md-4">
                                    <input type="file" name="image" class="form-control" accept="image/*" @change="GetImage" >
                                        <!-- <span class="text-danger" v-if="errors.image">{{errors.image[0]}}</span> -->
                                        <div class="input-group mb-3">
                                        <img :src="'http://localhost:8000/img/Profile/'+form.image" style="height:100px;width:100px;" alt="Image">
                                        </div>
                                </div>
                                <div class="col-md-8">
                                    <p><b>Id : </b><input type="text" class="form-control" v-model="form.id"></p>
                                    <!-- <span class="text-danger" v-if="errors.id">{{errors.id[0]}}</span> -->
                                    <p><b>User Id : </b><input type="text" class="form-control" v-model="form.user_id">
                                    </p>
                                    <h1>Personal Information</h1>
                                    <p><b>Date Of Birth : </b><input type="date" class="form-control"
                                            v-model="form.date_of_birth"></p>
                                    <p><b>Gender : </b><input type="text" class="form-control" v-model="form.gender">
                                    </p>
                                    <p><b>Marital Status : </b><input type="text" class="form-control"
                                            v-model="form.maritial_status"></p>
                                    <p><b>Blood Group : </b><input type="text" class="form-control"
                                            v-model="form.blood_group"></p>
                                    <p><b>Religion : </b><input type="text" class="form-control"
                                            v-model="form.religion"></p>
                                    <p><b>Nationality : </b><input type="text" class="form-control"
                                            v-model="form.nationality"></p>
                                    <p><b>National Id : </b><input type="text" class="form-control"
                                            v-model="form.national_id"></p>
                                    <p><b>Alternative Email : </b><input type="email" class="form-control"
                                            v-model="form.alternate_email"></p>
                                    <p><b>Alternative Phone : </b><input type="text" class="form-control"
                                            v-model="form.alternate_phone"></p>
                                    <p><b>Personal Website : </b><input type="text" class="form-control"
                                            v-model="form.personal_website"></p>
                                    <p><b>Social Network Id : </b><input type="text" class="form-control"
                                            v-model="form.social_id"></p>
                                    <h1>Guardian Information</h1>
                                    <p><b>Father's Name : </b><input type="text" class="form-control"
                                            v-model="form.father_name"></p>
                                    <p><b>Father's Contact No : </b><input type="text" class="form-control"
                                            v-model="form.father_phn"></p>
                                    <p><b>Father's Occupation : </b><input type="text" class="form-control"
                                            v-model="form.father_occupation"></p>
                                    <p><b>Father's Annual Income : </b><input type="text" class="form-control"
                                            v-model="form.father_income"></p>
                                    <p><b>Mother's Name : </b><input type="text" class="form-control"
                                            v-model="form.mother_name"></p>
                                    <p><b>Mother's Contact No : </b><input type="text" class="form-control"
                                            v-model="form.mother_phn"></p>
                                    <p><b>Mother's Occupation : </b><input type="text" class="form-control"
                                            v-model="form.mother_occupation"></p>
                                    <p><b>Mother's Annual Income : </b><input type="text" class="form-control"
                                            v-model="form.mother_income"></p>
                                    <p><b>Local Guardian's Name : </b><input type="text" class="form-control"
                                            v-model="form.local_gurdian_name"></p>
                                    <p><b>Local Guardian's Contact No : </b><input type="text" class="form-control"
                                            v-model="form.local_gurdian_phn"></p>
                                    <p><b>Local Guardian's Address : </b><input type="text" class="form-control"
                                            v-model="form.local_gurdian_address"></p>
                                    <h1>Permanent Address</h1>
                                    <p><b>Address : </b><input type="text" class="form-control"
                                            v-model="form.per_address"></p>
                                    <p><b>Post Office : </b><input type="text" class="form-control"
                                            v-model="form.per_post_office"></p>
                                    <p><b>Police Station : </b><input type="text" class="form-control"
                                            v-model="form.per_police_station"></p>
                                    <p><b>District/City : </b><input type="text" class="form-control"
                                            v-model="form.per_dictrict"></p>
                                    <p><b>Division/State : </b><input type="text" class="form-control"
                                            v-model="form.per_division"></p>
                                    <p><b>Country : </b><input type="text" class="form-control"
                                            v-model="form.per_country"></p>
                                    <p><b>Zip Code : </b><input type="text" class="form-control"
                                            v-model="form.per_zip_code"></p>
                                    <h1>Present Address</h1>
                                    <p><b>Address : </b><input type="text" class="form-control" v-model="form.address">
                                    </p>
                                    <p><b>Post Office : </b><input type="text" class="form-control"
                                            v-model="form.post_office"></p>
                                    <p><b>Police Station : </b><input type="text" class="form-control"
                                            v-model="form.police_station"></p>
                                    <p><b>District/City : </b><input type="text" class="form-control"
                                            v-model="form.dictrict"></p>
                                    <p><b>Division/State : </b><input type="text" class="form-control"
                                            v-model="form.division"></p>
                                    <p><b>Country : </b><input type="text" class="form-control" v-model="form.country">
                                    </p>
                                    <p><b>Zip Code : </b><input type="text" class="form-control"
                                            v-model="form.zip_code"></p>
                                    <h1>Education</h1>
                                    <p><b>Degree : </b><input type="text" class="form-control" v-model="form.degree">
                                    </p>
                                    <p><b>Degree Name : </b><input type="text" class="form-control"
                                            v-model="form.degree_name"></p>
                                    <p><b>University : </b><input type="text" class="form-control"
                                            v-model="form.university"></p>
                                    <p><b>Board : </b><input type="text" class="form-control" v-model="form.board"></p>
                                    <p><b>Passing Year : </b><input type="text" class="form-control"
                                            v-model="form.passing_year"></p>
                                    <p><b>Grade/Class/Devision : </b><input type="text" class="form-control"
                                            v-model="form.class_devision"></p>
                                    <p><b>CGPA : </b><input type="text" class="form-control" v-model="form.cgpa"></p>
                                    <p><b>Remarks : </b><input type="text" class="form-control" v-model="form.remarks">
                                    </p>
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
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'ManagementEditStudent',
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
                    image:'',
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
        components: {
            SideBar,
            NavBar
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
            async editStudent() {
                await axios.put("/management/edit/student", this.form);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Student Information Updated Successfully!!',
                    showConfirmButton: false,
                    timer: 1500
                })
                this.$router.push({
                    name: 'ManagementShowAllStudents'
                })
            },
            async loadData() {
                let result = await axios.get("/management/student_info/" + this.$route.params.id);
                this.form = result.data;
            },
        },
        created() {
            this.loadData();
        },
    }
</script>

<style scoped>

</style>