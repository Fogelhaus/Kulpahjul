<template>
	  <div id="app">
          
          <siteHeader></siteHeader>
          <div>
              <router-view> </router-view>
            </div>
          <siteFooter></siteFooter>


	  </div>
	</template>
	
	<script>
 	import siteHeader from './components/Header/SiteHeader'
	import siteFooter from './components/SiteFooter'

	export default {
	  name: 'app',
	 components: { siteHeader, siteFooter},
	}
	</script>

	<style lang="scss">
	@import "../../node_modules/bootstrap/scss/bootstrap";
	</style>
	
