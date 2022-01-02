<template>
    <!-- Nav Section Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">
            <router-link :to="{name: 'Home'}" class="navbar-brand" href="#">Home</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link :to="{name: 'Dashboard'}" class="navbar-brand active" aria-current="page">
                            Dashboard
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'About'}" class="navbar-brand active" aria-current="page" href="#">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'Teacher'}" class="navbar-brand" href="#">Teacher Info</router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Notice board
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="admission.html">Admission</a></li>
                            <li><a class="dropdown-item" href="exam.html">Exam</a></li>
                            <li><a class="dropdown-item" href="reasult.html">Reasult</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="allnotice.html">All Notice</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-lg-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-danger" @click.prevent = "userLogout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav Section End -->
    <!-- Main Section Start -->
    <div class="container-fluid d-flex justify-content-center mt-5 pt-3 bg-light">
        <h1>Welcome To ABCD College</h1>
    </div>
    <!-- Carasol Start -->
    <div id="carouselExampleControls" class="container-fluid carousel slide" data-bs-ride="carousel" >
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
    <!-- Contact Section Start -->
    <section class="contact mt-3" id="contact">
        <div class="container-fluid bg-dark">
            <div class="container-lg py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title-h1 text-light mb-5">Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Email</h3>
                                <p class="text-white">abcdCollege@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Phone</h3>
                                <p class="text-white">+88 01718863771</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon fs-4 text-success">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5 text-light">Location</h3>
                                <p class="text-white">ABCD College <br> Ashulia , Savar , Dhaka .
                                </p>
                            </div>
                        </div>
                        <div class="social-links mb-4">
                            <a href="#" class="fs-5 text-light me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="fs-5 text-light me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="fs-5 text-light me-3"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="fs-5 text-light me-3"><i class="fab fa-github"></i></a>
                            <a href="#" class="fs-5 text-light me-3"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <form action="">
                                <div class="row mb-4 d-flex">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" placeholder="Your Name"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" placeholder="Your Email"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <input type="text" placeholder="Phone ( 10 Degit )..."
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <input type="text" placeholder="Subject"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <textarea rows="5" placeholder="Your Message"
                                            class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-success px-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Contact Section End-->
    <!-- Footer Section Start -->
    <div class="footer  bg-dark py-4">
        <div class="container-lg border-top  text-white ">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="m-0 text-center">© 2021 Copyright by Nishan BD. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->
</template>
<script>
    export default {
        name: 'Home',
        methods: {
            userLogout() {
                this.$store.dispatch("LOGOUT")
                    .then((res) => {
                        console.log(res.data)
                        this.$router.push({
                            name: 'Login'
                        })
                    }).catch(() => {
                    });
            }
        },
    }
</script>