<template>
  <div class="bg-danger">
    <div class="card text-white border-0">
      <img
        class="card-img w-100 h-auto"
        src="https://www.fillmurray.com/1900/700"
        alt
      />

      <div class="card-img-overlay d-flex align-items-end container">
        <div class="w-50 mb-3">
          <h1 class="card-title">{{ contactData[0].title }}</h1>
          <p class="card-text">{{ contactData[0].subheading }}</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="pt-4 row  ">
        <h2></h2>
        <div class="col-sm-4 col-md-3">
          <div class="">
            <ul class="list-group text-light">
              <li class="list-group-item bg-dark">Kontakt telefon:</li>
              <li class="list-group-item bg-transparent">
                {{ globalData[0].phone }}
              </li>
              <li class="list-group-item bg-dark">Kontakt e-post:</li>
              <li class="list-group-item bg-transparent">
                {{ globalData[0].email }}
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 col-md-6">
          <div v-for="text in contactData[0].body" v-bind:key="text.text">

            <div class="font-weight-bold" v-html="text.articleHeading"></div>
            <div v-html="text.text"></div>
          </div>
        </div>

        <div class="col-sm-3">
          <img v-bind:src="contactData[0].featuredImage" class="mh-100 mw-100" alt />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "contact",
  components: {},
  data() {
    return {
      contactData: [],
      globalData: [],
    };
  },
  mounted() {
    this.getEntries();
  },
  methods: {
    getEntries() {
      const axios = require("axios");
      let vm = this;
      axios.get(`/api/contact.json`).then((response) => {
        this.contactData = response.data.data;
      });
      axios.get(`/api/globals.json`).then((response) => {
        this.globalData = response.data.data;
      });
    },
  },
};
</script>