<template>
    <nav-bar></nav-bar>
    <side-bar></side-bar>
    <div class="content-wrapper">
        <div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading py-3">
                 <h1>Update Profile</h1>  
                </div>
                <div class="panel-body">
                    <form >
                        <div class="col-md-4">
                           <!--  @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                            @elseif($image)
                                <img src="{{asset('assets/images/profile')}}/{{$image}}" width="100%" />
                            @else
                                <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                            @endif -->
                            <input type="file" class="form-control my-3">
                        </div>
                        <div class="col-md-8">
                            <h3>Name : {{getUserInfo.name}}</h3>
                            <p><b>Email : </b>{{getUserInfo.email}}</p>
                            <p><b>Phone : </b>{{getUserInfo.phone}}</p>
                            <p><b>Student Id : </b><input type="text" class="form-control"></p>
                            
                            <h1>Personal Information</h1>
                            <p><b>Date Of Birth : </b><input type="text" class="form-control"></p>
                            <p><b>Gender : </b><input type="text" class="form-control"></p>
                            <p><b>Marital Status : </b><input type="text" class="form-control"></p>
                            <p><b>Blood Group : </b><input type="text" class="form-control"></p>
                            <p><b>Religion : </b><input type="text" class="form-control"></p>
                            <p><b>Nationality : </b><input type="text" class="form-control"></p>
                            <p><b>National Id : </b><input type="text" class="form-control"></p>
                            <p><b>Alternative Email : </b><input type="text" class="form-control"></p>
                            <p><b>Alternative Phone : </b><input type="text" class="form-control"></p>
                            <p><b>Personal Website : </b><input type="text" class="form-control"></p>
                            <p><b>Social Network Id : </b><input type="text" class="form-control"></p>
                            
                            <h1>Guardian Information</h1>
                            <p><b>Father's Name : </b><input type="text" class="form-control"></p>
                            <p><b>Father's Contact No : </b><input type="text" class="form-control"></p>
                            <p><b>Father's Occupation : </b><input type="text" class="form-control"></p>
                            <p><b>Father's Annual Income : </b><input type="text" class="form-control"></p>
                            <p><b>Mother's Name : </b><input type="text" class="form-control"></p>
                            <p><b>Mother's Contact No : </b><input type="text" class="form-control"></p>
                            <p><b>Mother's Occupation : </b><input type="text" class="form-control"></p>
                            <p><b>Mother's Annual Income : </b><input type="text" class="form-control"></p>
                            <p><b>Local Guardian's Name : </b><input type="text" class="form-control"></p>
                            <p><b>Local Guardian's Contact No : </b><input type="text" class="form-control"></p>
                            <p><b>Local Guardian's Address : </b><input type="text" class="form-control"></p>
                            
                            <h1>Present Address</h1>
                            <p><b>Address  : </b><input type="text" class="form-control"></p>
                            <p><b>Post Office : </b><input type="text" class="form-control"></p>
                            <p><b>Police Station : </b><input type="text" class="form-control"></p>
                            <p><b>District/City : </b><input type="text" class="form-control"></p>
                            <p><b>Division/State : </b><input type="text" class="form-control"></p>
                            <p><b>Country : </b><input type="text" class="form-control"></p>
                            <p><b>Zip Code : </b><input type="text" class="form-control"></p>

                            <h1>Permanent  Address</h1>
                            <p><b>Address  : </b><input type="text" class="form-control"></p>
                            <p><b>Post Office : </b><input type="text" class="form-control"></p>
                            <p><b>Police Station : </b><input type="text" class="form-control"></p>
                            <p><b>District/City : </b><input type="text" class="form-control"></p>
                            <p><b>Division/State : </b><input type="text" class="form-control"></p>
                            <p><b>Country : </b><input type="text" class="form-control"></p>
                            <p><b>Zip Code : </b><input type="text" class="form-control"></p>

                            <h1>Education</h1>
                            <p><b>Degree  : </b><input type="text" class="form-control"></p>
                            <p><b>Degree Name : </b><input type="text" class="form-control"></p>
                            <p><b>University : </b><input type="text" class="form-control"></p>
                            <p><b>Board : </b><input type="text" class="form-control"></p>
                            <p><b>Passing Year : </b><input type="text" class="form-control"></p>
                            <p><b>Grade/Class/Devision : </b><input type="text" class="form-control"></p>
                            <p><b>CGPA : </b><input type="text" class="form-control"></p>
                            <p><b>Remarks : </b><input type="text" class="form-control"></p>

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
import NavBar from '../../components/NavBar.vue'
import SideBar from '../../components/SideBar.vue'
    export default {
  components: { SideBar, NavBar },
        name: 'EditProfile',
        computed: {
            getUserInfo() {
                return this.$store.getters.GET_AUTH_INFO;
            }
        },
    }
</script>