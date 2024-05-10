import './bootstrap';

import { createApp } from 'vue'

//const app = createApp()

import app from './components/app.vue'

import router from './router/index.js'

import MasonryWall from '@yeger/vue-masonry-wall'

//Pinia

//const pinia = createPinia()
//const app = createApp(app)



createApp(app).use(router).mount("#app")

createApp(app).use(router).mount("#app_products_list");

//app.use(MasonryWall)

createApp(app).use(router).use(MasonryWall).mount("#app_products_masonrywall");


//Would get back to this in a jiffy
/*createApp(app).use(router)
createApp(app).use(pinia)

router.beforeEach((to) => {
  // ✅ This will work make sure the correct store is used for the
  // current running app
  const main = useMainStore(pinia)

  if (to.meta.requiresAuth && !main.isLoggedIn) return '/login'
})
*/