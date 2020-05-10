import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import { routes } from './routes'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import VueYoutube from 'vue-youtube'

Vue.use(VueRouter),
Vue.use(VueYoutube)
        
const router = new VueRouter({
mode: 'history',
routes

})

new Vue({
  el: '#app',
  template: '<App />',
  components: { App },
  router
})