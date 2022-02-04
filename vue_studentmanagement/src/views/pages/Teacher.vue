<template>
    <div>
        <!-- Nav Section Start -->
        <nav-home></nav-home>
        <!-- Nav Section End -->
        <div class="container d-flex justify-content-center mt-5 pt-3 text-light">
            <h1>Welcome To Teacher Page</h1>
        </div>

        <!-- Main Section Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center">
                    <div class="card">
                        <img src="t2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section End -->
        <!-- Footer Section Start -->
        <footer-home></footer-home>
        <!-- Footer Section End -->
    </div>
</template>
<script>
    import FooterHome from '../../components/FooterHome.vue';
    import NavHome from '../../components/NavHome.vue';
    export default {
        components: {
            NavHome,
            FooterHome
        },
        name: 'Teacher',
    }
</script>