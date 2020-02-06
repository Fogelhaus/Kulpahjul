<template>
  <div>
    <videoArea></videoArea>
    <socialArea></socialArea>
    <aboutArea></aboutArea>
    <ctaArea></ctaArea>
  </div>
</template>

<script>
import videoArea from "../components/Home/VideoArea";
import socialArea from "../components/Home/SocialArea";
import aboutArea from "../components/Home/AboutArea";
import ctaArea from "../components/Home/CtaArea";
export default {
  name: "home",
  components: { videoArea, socialArea, aboutArea, ctaArea }
}
</script>