<template>
    <div id="app">
    <h1> {! testMessage !}Ok!</h1>
    </div>
</template>

<script>
	export default {
	  name: 'app',
	  data () {
	    return {
	      testMessage: 'Hello Wörld'
	    }
	  }
	}
	</script>