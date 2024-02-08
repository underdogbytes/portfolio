import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/home/Index.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    // route level code-splitting
    // this generates a separate chunk (Projects.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    {
      path: '/projects',
      name: 'projects',
      component: () => import('@/views/projects/Index.vue')
    }
  ]
})

export default router
