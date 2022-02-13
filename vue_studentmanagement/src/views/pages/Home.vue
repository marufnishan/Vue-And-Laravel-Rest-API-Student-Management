<template>
  <div class="overflow">
    <!-- Nav Section Start -->
    <nav-home></nav-home>
    <!-- Nav Section End -->
    <!-- Main Section Start -->
    <div
      class="container-fluid d-flex justify-content-center mt-5 bg-light"
      id="cname"
    >
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
            <li>
              <span
                >Course Offer( Guidelines, Regi. Schedule & Semester Schedule of
                Spring-22 Second</span
              >
            </li>
            <li>
              <span
                >Fees Payment Schedule for Spring-2022 semester's Registration
                Third</span
              >
            </li>
            <li><span>Advising Schedule for Spring-2022 Forth</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Carasol Start -->
    <div class="container-fluid">
        <Carousel :autoplay="3000" :wrap-around="true">
      <Slide v-for="slide in HomeSliders" :key="slide">
        <div class="carousel__item">
            <img :src="'http://localhost:8000/img/HomeSlider/'+slide.image" class="w-100"/>
        </div>
      </Slide>

      <template #addons>
        <Navigation />
        <Pagination />
      </template>
    </Carousel>
    </div>
    
    <!-- Carasol End -->
    <!-- Main Section End -->
    <!-- Footer Section Start -->
    <footer-home></footer-home>
    <!-- Footer Section End -->
  </div>
</template>
<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";

import "vue3-carousel/dist/carousel.css";
import axios from "axios";
import FooterHome from "../../components/FooterHome.vue";
import NavHome from "../../components/NavHome.vue";
export default {
  components: {
    NavHome,
    FooterHome,
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  name: "Home",
  data() {
    return {
      token: this.$store.getters.GET_AUTH_TOKEN,
      HomeSliders: [],
    };
  },
  methods: {
    async loadData() {
      let result = await axios.get("/homeslider");
      this.HomeSliders = result.data;
      console.log(this.HomeSliders);
    },
  },
  created() {
    axios.defaults.headers.common["Authorization"] = "Bearer " + this.token;
    this.loadData();
  },
};
</script>
<style scoped>

    .container-fluid{
      margin: 0 !important;
      padding: 0 !important;
    }

    #cname {
        margin-top: 50px !important;
        padding-top: 20px !important;
    }


  .carousel__item {
  min-height: 200px;
  width: 100%;
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}


.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}
li.carousel__slide.carousel__slide--active.carousel__slide--visible {
    padding: 0;
}
.overflow{
  overflow-x: hidden;
}
</style>