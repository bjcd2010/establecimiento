import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router)

export default new Router({
    routes:[
        {
            path: '/home',
            name: 'home',
            component: require('./views/Tiendas').default
        },
        {
            path: '/empleos',
            name: 'empleos',
            component: require('./views/Empleos').default
        },
        {
            path: '/productos',
            name: 'productos',
            component: require('./views/Productos').default
        },

        {
            path: '/nueva-pyme',
            name: 'nueva-pyme',
            component: require('./views/NuevaPyme').default
        },
       // {
           // path: '/slug',
           // name: 'pyme',
           // component: require('./views/Pyme').default,
          //  props: true
      //  },


        {
            path: '*',
            component: require('./views/404').default
        }
    ],

    mode: 'history'
})