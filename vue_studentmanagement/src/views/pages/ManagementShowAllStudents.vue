<template>
    <nav-bar></nav-bar>
    <side-bar></side-bar>
    <div class="content-wrapper">
        <div>
            <div class="container  py-3 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading p-3"
                                style="background:linear-gradient(45deg,#00897B,#0081bf);">
                                <div class="row">
                                    <div class="col-md-8">
                                        All Students
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <a href="#" class="btn btn-success float-right">Add New</a>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" placeholder="Search...." />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead style="background-color:#31D2F2;">
                                            <tr>
                                                <th>Student Id</th>
                                                <th>User Id</th>
                                                <th>Image</th>
                                                <th>Date_of_birth</th>
                                                <th>Gender</th>
                                                <th>Maritial_status </th>
                                                <th>Blood_group </th>
                                                <th>Religion</th>
                                                <th>Nationality</th>
                                                <th>National_id</th>
                                                <th>Alternate_email</th>
                                                <th>Alternate_phone</th>
                                                <th>Personal_website </th>
                                                <th>Social_id </th>

                                                <th>Father_name</th>
                                                <th>Father_phn</th>
                                                <th>Father_occupation</th>
                                                <th>Father_income</th>
                                                <th>Mother_name</th>
                                                <th>Mother_phn </th>
                                                <th>Mother_occupation</th>
                                                <th>Mother_income</th>
                                                <th>Local_gurdian_name</th>
                                                <th>Local_gurdian_phn </th>
                                                <th>Local_gurdian_address </th>

                                                <th>Address</th>
                                                <th>Post_office</th>
                                                <th>Police_station</th>
                                                <th>Dictrict</th>
                                                <th>Division</th>
                                                <th>Country </th>
                                                <th>zip_code </th>

                                                <th>Per Address</th>
                                                <th>Per Post_office</th>
                                                <th>Per Police_station</th>
                                                <th>Per Dictrict</th>
                                                <th>Per Division</th>
                                                <th>Per zip_code </th>

                                                <th>Degree</th>
                                                <th>Degree_name</th>
                                                <th>University</th>
                                                <th>Board </th>
                                                <th>Passing_year </th>
                                                <th>Class_devision</th>
                                                <th>CGPA</th>
                                                <th>remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="item in students" :key="item.id">
                                                <td>{{item.id}}</td>
                                                <td>{{item.user_id }}</td>
                                                <td><img :src="item.image" width="60" /></td>
                                                <td>{{item.date_of_birth}}</td>
                                                <td>{{item.gender}}</td>
                                                <td>{{item.maritial_status}}</td>
                                                <td>{{item.blood_group}}</td>
                                                <td>{{item.religion}}</td>
                                                <td>{{item.nationality}}</td>
                                                <td>{{item.national_id}}</td>
                                                <td>{{item.alternate_email}}</td>
                                                <td>{{item.alternate_phone}}</td>
                                                <td>{{item.personal_website}}</td>
                                                <td>{{item.social_id}}</td>

                                                <td>{{item.father_name}}</td>
                                                <td>{{item.father_phn}}</td>
                                                <td>{{item.father_occupation}}</td>
                                                <td>{{item.father_income}}</td>
                                                <td>{{item.mother_name}}</td>
                                                <td>{{item.mother_phn}}</td>
                                                <td>{{item.mother_occupation}}</td>
                                                <td>{{item.mother_income}}</td>
                                                <td>{{item.local_gurdian_name}}</td>
                                                <td>{{item.local_gurdian_phn}}</td>
                                                <td>{{item.local_gurdian_address}}</td>

                                                <td>{{item.address}}</td>
                                                <td>{{item.post_office}}</td>
                                                <td>{{item.police_station}}</td>
                                                <td>{{item.dictrict}}</td>
                                                <td>{{item.division}}</td>
                                                <td>{{item.country}}</td>
                                                <td>{{item.zip_code}}</td>

                                                <td>{{item.per_address}}</td>
                                                <td>{{item.per_post_office}}</td>
                                                <td>{{item.per_police_station}}</td>
                                                <td>{{item.per_dictrict}}</td>
                                                <td>{{item.per_division}}</td>
                                                <td>{{item.per_zip_code}}</td>

                                                <td>{{item.degree}}</td>
                                                <td>{{item.degree_name}}</td>
                                                <td>{{item.university}}</td>
                                                <td>{{item.board}}</td>
                                                <td>{{item.passing_year}}</td>
                                                <td>{{item.class_devision}}</td>
                                                <td>{{item.cgpa}}</td>
                                                <td>{{item.remarks}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"><i class="btn btn-success fas fa-edit mr-3"></i></a>
                                                        <i class="btn btn-danger fas fa-trash-alt"></i>
                                                    </div>
                                                    
                                                </td>
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
</template>

<script>
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'ManagementShowAllStudents',
        data() {
            return {
                students: [],
            }
        },
        components: {
            SideBar,
            NavBar
        },
         methods: {
            async loadData() {
                let result = await axios.get("/management/show/students");
                this.students = result.data;
            }
            
        },
        created() {
            this.loadData();
        },
    }
</script>

<style scoped>

</style>