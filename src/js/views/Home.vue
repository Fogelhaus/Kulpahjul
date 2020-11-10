<template>
  <div>
    <videoArea></videoArea>
    <moreThanArea></moreThanArea>
    <socialArea></socialArea>
    <aboutArea></aboutArea>
    <ctaArea></ctaArea>
  </div>
</template>

<script>
import videoArea from "../components/Home/VideoArea";
import socialArea from "../components/Home/SocialArea";
import moreThanArea from "../components/Home/MoreThanArea";
import ctaArea from "../components/Home/CtaArea";
import aboutArea from "../components/Home/AboutArea";
export default {
  name: "home",
  components: { videoArea, socialArea, moreThanArea, aboutArea, ctaArea }
}
</script>