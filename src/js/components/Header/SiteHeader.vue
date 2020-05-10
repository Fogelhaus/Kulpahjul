<template>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <div class="h-3-rem">
          <img class="h-100" v-bind:src="globalData[0].featuredImage" alt />
        </div>
        
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <router-link to="/" class="nav-item nav-link">Startsidan</router-link>
          <router-link to="/kontakt" class="nav-item nav-link">Kontakt</router-link>
          <router-link to="/tjänster" class="nav-item nav-link">Tjänster</router-link>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "siteHeader",

components: { 
   
    },
  data() {
    return {
      globalData: []
    };
  },
  mounted() {
    this.getGlobals();
  },
  methods: {
    getGlobals() {
      const axios = require("axios");
      let vm = this;
      axios.get(`/api/globals.json`).then(response => {
        this.globalData = response.data.data;
      });
    }
  }
};

</script>