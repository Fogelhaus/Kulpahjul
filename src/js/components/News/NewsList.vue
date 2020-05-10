 	<template>
		<div class="NewsList">
			<h1>Here goes list from API</h1>
            <ul class="list-group">
                <li class="list-group-item" v-for="entry in news"> Namn: {{entry.title}}, Slug: {{entry.slug}}</li>
                 </ul>
		</div>
	</template>
	
	<script>
	export default {
	  name: 'newsList',
	  data () {
	    return {
            news: []
	    }
      },
      mounted () {
          this.getEntries();
      },
      methods: {
          getEntries () {
              const axios = require('axios');
              let vm = this;
              axios.get(`/api/news.json`)
              .then(response => {
                  this.news = response.data.data
              })
          }
      }
      

	}
	</script>

