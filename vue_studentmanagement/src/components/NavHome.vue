<template>
    <div>
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
                <ul class="navbar-nav ml-lg-3 mb-2 mb-lg-0 mt-3 mt-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-danger" @click.prevent = "userLogout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav Section End -->
    </div>
</template>

<script>
    export default {
        name:'NavHome',
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

<style scoped>

</style>