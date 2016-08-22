import Vue from 'vue/dist/vue.js'
import App from './App.vue'
import VueRouter from 'vue-router'
import routes from './routes.js'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: 'dashboard',
  linkActiveClass: 'active',
  routes: routes
})

new Vue(Vue.util.extend({ router }, App)).$mount('#app')
