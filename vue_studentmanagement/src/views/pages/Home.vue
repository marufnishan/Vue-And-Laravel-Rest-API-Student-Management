<template>
    <!-- Nav Section Start -->
    <nav-home></nav-home>
    <!-- Nav Section End -->
    <!-- Main Section Start -->
    <div class="container-fluid d-flex justify-content-center mt-5 pt-3 bg-light">
        <h1>Welcome To ABCD College</h1>
    </div>
    <div class="container-fluid d-flex flex-column">
        <div class="row">
            <div class="col-md-1">
                <div class="static-txt">NEW NOTICE *</div>
            </div>
            <div class="col-md-11">
                <ul class="dynamic-txts">
                    <li><span>One Two Three Four</span></li>
                    <li><span>Course Offer( Guidelines, Regi. Schedule & Semester Schedule of Spring-22 Second</span></li>
                    <li><span>Fees Payment Schedule for Spring-2022 semester's Registration Third</span></li>
                    <li><span>Advising Schedule for Spring-2022 Forth</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Carasol Start -->
    <div id="carouselExampleControls" class="container-fluid carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carasol End -->
    <!-- Main Section End -->
    <!-- Footer Section Start -->
    <footer-home></footer-home>
    <!-- Footer Section End -->
</template>
<script>
    import axios from 'axios'
    import FooterHome from '../../components/FooterHome.vue';
    import NavHome from '../../components/NavHome.vue';
    export default {
        components: {
            NavHome,
            FooterHome
        },
        name: 'Home',
        data() {
            return {
                token: this.$store.getters.GET_AUTH_TOKEN,
            }
        },
        
        created(){
            axios.defaults.headers.common['Authorization'] = 'Bearer '+ this.token ;
        },
    }
</script>
<style scoped>
.container-fluid{
    margin: 0 !important;
    padding: 0 !important;
}
</style>