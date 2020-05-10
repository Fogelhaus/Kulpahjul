<template>
  <div class="container-fluid">
    <div class="social-container py-5">
      <div class="row bg-light rounded-6">
        <div class="col-sm pt-5">
          <div class="px-5 h-5-rem">
            <a v-bind:href="globalData[0].youtubeMain">
            <p>
              
              <i class="fab fa-youtube text-danger fz-28 align-middle"></i> Kulpåhjul på Youtube
            </p>
            </a>
          </div>
          <div class="px-5 h-5-rem">
            <a v-bind:href="globalData[0].youtubeBonus">
            <p>
              <i class="fab fa-youtube text-danger fz-28 align-middle"></i> Bonuskanalen på Youtube
            </p>
             </a>
          </div>
        </div>
        <div class="col-sm pt-4">
          <div class="px-5 h-4-rem">
            <a v-bind:href="globalData[0].facebook">
            <p>
              <i class="fab fa-facebook-square text-primary fz-28 align-middle"></i> Kulpåhjul på Facebook
            </p>
             </a>
          </div>
          <div class="px-5 h-4-rem">
            <a v-bind:href="globalData[0].instagram">
            <p>
              <i class="fab fa-instagram-square text-info fz-28 align-middle"></i> Kulpåhjul på Instagram
            </p>
             </a>
          </div>
          <div class="px-5 h-4-rem">
            <a v-bind:href="globalData[0].snapchat">
            <p>
              <i class="fab fa-snapchat-square text-warning fz-28 align-middle"></i> Kulpåhjul på Snapchat
            </p>
             </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "socialArea",
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