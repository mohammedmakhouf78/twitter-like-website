require('./bootstrap');
import router from './router'
window.Vue = require('vue').default;




Vue.component('main-app', require('./components/mainApp.vue').default);
Vue.component('top-nav', require('./components/layouts/home/TopNav.vue').default);



const app = new Vue({
    el: '#app',
    router,
    // render: (h) => h(App)
});
