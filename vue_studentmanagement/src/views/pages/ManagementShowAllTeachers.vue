<template>
    <div>
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
                                            All Teachers
                                        </div>

                                        <div class="col-md-2">
                                            <router-link :to="{name: 'ManagementAddTeacher'}" href="#"
                                                class="btn btn-success float-right">Add New</router-link>
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
                                                    <th>Id</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Email </th>
                                                    <th>Phone </th>
                                                    <th>Subject</th>
                                                    <th>Designation</th>
                                                    <th>Salary</th>
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
                                                    <th>Address</th>
                                                    <th>Post_office</th>
                                                    <th>Police_station</th>
                                                    <th>Dictrict</th>
                                                    <th>Division</th>
                                                    <th>Country </th>
                                                    <th>zip_code </th>
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
                                                <tr v-for="item in teachers" :key="item.id">
                                                    <td>{{item.id}}</td>
                                                    <td><img :src="'http://localhost:8000/img/Profile/'+item.image" width="60" /></td>
                                                    <td>{{item.name}}</td>
                                                    <td>{{item.email}}</td>
                                                    <td>{{item.phone}}</td>
                                                    <td>{{item.subject}}</td>
                                                    <td>{{item.designation}}</td>
                                                    <td>{{item.salary}}</td>
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
                                                    <td>{{item.address}}</td>
                                                    <td>{{item.post_office}}</td>
                                                    <td>{{item.police_station}}</td>
                                                    <td>{{item.dictrict}}</td>
                                                    <td>{{item.division}}</td>
                                                    <td>{{item.country}}</td>
                                                    <td>{{item.zip_code}}</td>
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
                                                            <router-link :to="'/management/edit/teachers/'+item.id"
                                                                href="#"><i
                                                                    class="btn btn-success fas fa-edit mr-3"></i>
                                                            </router-link>
                                                            <i class="btn btn-danger fas fa-trash-alt"
                                                                v-on:click="deleteTeacher(item.id)"></i>
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
    </div>
</template>

<script>
    import Swal from 'sweetalert2'
    import axios from 'axios'
    import NavBar from '../../components/NavBar.vue'
    import SideBar from '../../components/SideBar.vue'
    export default {
        name: 'ManagementShowAllTeachers',
        data() {
            return {
                teachers: [],
            }
        },
        components: {
            SideBar,
            NavBar
        },
        methods: {
            async loadData() {
                let result = await axios.get("/management/show/teachers");
                this.teachers = result.data;
            },

            async deleteTeacher(id) { 
                await Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete("/management/delete_teacher_info/" + id);
                        Swal.fire(
                            'Deleted!',
                            'Teacher has been deleted.',
                            'success'
                        )
                    }
                })
                this.loadData();
            },

        },
        created() {
            this.loadData();
        },
    }
</script>

<style scoped>

</style>