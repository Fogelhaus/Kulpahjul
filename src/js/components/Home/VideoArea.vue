<template>
  
    <div class="video-container text-center text-light bg-info">
      <youtube :video-id="videoId" ref="youtube" @playing="playing" class=""></youtube>
    </div>
    <!-- <button @click="playVideo">play</button> -->
 
</template>


<script>
export default {
  name: "videoArea",
  data() {
    return {
      videoId: "PfqVvdBJ_e0",
      
    };
  },
  methods: {
    playVideo() {
      this.$refs.youtube.player.playVideo();
    },

    playing() {
      console.log("playing video");
    }
  },
  computed: {
    player() {
      return this.$refs.youtube.player;
    }
  },
  props: {
    fitParent: true,
    playerVars: {
    type: Object,
    default: function () {
      return { autoplay: 1, controls: 0 }
    }
  }
    
  }
};
</script>