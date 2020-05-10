<template>
  <div class="bg-danger">
    <div class="card text-white border-0">
      <img class="card-img w-100 h-auto" src="https://www.fillmurray.com/1900/700" alt />

      <div class="card-img-overlay d-flex align-items-end container">
        <div class="w-50 mb-3"><h1 class="card-title">{{ contactData[0].title }}</h1>
        <p class="card-text"
        >{{ contactData[0].subheading }}</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="pt-4">
        <h2></h2>
        <div class="row">
          <div class="col-sm">
            <ul class="list-group text-light">
              <li class="list-group-item bg-dark">Kontakt telefon:</li>
              <li class="list-group-item bg-transparent">XXX-XXX XX XX</li>
              <li class="list-group-item bg-dark">Kontakt e-post:</li>
              <li class="list-group-item bg-transparent">hej@hej.se</li>
            </ul>
          </div>
          <div
            class="col-sm"
          >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem aliquam necessitatibus voluptatum omnis similique commodi cumque incidunt, atque, animi harum eos reprehenderit placeat nesciunt, expedita blanditiis corporis rem minima asperiores id amet suscipit. Ad et obcaecati officia, culpa possimus beatae?</div>
          <!-- v-html="homeData[0].body[1].text" -->
          <div class="col-sm-4">
            <img class="mh-100 mw-100" src="https://www.fillmurray.com/300/400" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "contact",
components: { 
   
    },
  data() {
    return {
      contactData: []
    };
  },
  mounted() {
    this.getEntries();
  },
  methods: {
    getEntries() {
      const axios = require("axios");
      let vm = this;
      axios.get(`/api/contact.json`).then(response => {
        this.contactData = response.data.data;
      });
    }
  }
};
</script>