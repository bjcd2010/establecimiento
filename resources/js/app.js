require('./bootstrap');

window.Vue = require('vue');
import router from './routes';
import store from './store'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('Example', require('./components/Example.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('navegacion', require('./components/includes/navegacion.vue').default);
Vue.component('pie',        require('./components/includes/pie.vue').default);

Vue.component('pymes',      require('./components/admin/pymes.vue').default);
Vue.component('products',   require('./components/admin/products.vue').default);
Vue.component('jobs',       require('./components/admin/jobs.vue').default);

Vue.component('app', require('./components/App.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store
});
