<template>
  <div class="bg-danger">
    <div class="container">
      <div class="py-4">
        <h2>Om Kulpåhjul</h2>
        <div class="row">
          <div class="col-md">
            <div v-for="text in homeData[0].body" v-bind:key="text.text">
              <div class="font-weight-bold" v-html="text.articleHeading"></div>
              <div v-html="text.text"></div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            class="w-100 img-fluid"
            v-bind:src="homeData[0].featuredImage"
            alt
          />
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "aboutArea",
  components: {},
  data() {
    return {
      homeData: [],
    };
  },
  mounted() {
    this.getEntries();
  },
  methods: {
    getEntries() {
      const axios = require("axios");
      let vm = this;
      axios.get(`/api/home.json`).then((response) => {
        this.homeData = response.data.data;
      });
    },
  },
};
</script>