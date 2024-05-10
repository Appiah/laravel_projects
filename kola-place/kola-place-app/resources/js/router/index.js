import { createRouter, createWebHistory } from "vue-router"

import invoiceIndex from '../components/invoice/index.vue'
import productIndex from '../components/products/index.vue'
import notFound from '../components/notfound.vue'

const routes = [
    {
        path: '/',
        component: invoiceIndex
    },
    {
        path: '/products',
        component: productIndex
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }
]


const router = createRouter(
    {
        history: createWebHistory(),
        routes
    }
)

export default router;