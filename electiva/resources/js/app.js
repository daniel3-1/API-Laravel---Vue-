import Vue from 'vue';

Vue.component('example-component', require('./components.vue').default);

const app = new Vue({
  el: '#app',
  router,
});
