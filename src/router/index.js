import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/mesiExample',
    name: 'mesiExample',
    // meta: {
    //   layout: 'layout',
    // },
    component: () => import(/* webpackChunkName: "mesiExample1" */ '../views/mesiExample/ExampleMesiView.vue')
  },
  {
    path: '/mesiExample2',
    name: 'mesiExample2',
    component: () => import(/* webpackChunkName: "mesiExample2" */ '../views/mesiExample/Example2MesiView.vue')
  },
  {
    path: '/TestSam',
    name: 'testSam',
    component: () => import(/* webpackChunkName: "testsam" */ '../views/mesiExample/TestSam.vue')
  },
]

// import Vue from 'vue';
// import VueRouter from 'vue-router';
// import Base from '@/views/Layout/Base.vue';

// Vue.use(VueRouter);

// const routes = [
//   {
//     path: '',
//     component: Base,
//     meta: { requiresAuth: true },
//     children: [
//       {
//         path: '/',
//         name: 'Home',
//         component: () => import('@/views/Home.vue'),
//       },
//       {
//         path: '/about',
//         name: 'About',
//         component: () => import('@/views/About.vue'),
//       },
//     ],
//   },
// ];

// const router = new VueRouter({
//   mode: 'history',
//   base: import.meta.env.Base,
//   routes,
// });

// export default router;

const router = new VueRouter({
  routes
})

export default router
