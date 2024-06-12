import {createRouter, createWebHistory} from 'vue-router';

import importedDashboardComponent from '../views/dashboardComponent.vue'
import importedLoginComponent from '../views/loginComponent.vue'
import importedSignupComponent from '../views/signupComponent.vue'
import importedDownloadappComponent from '../views/downloadappComponent.vue'
import importedMessagingComponent from '../views/messagingComponent.vue'

const routes = [
    {
        path: '/',
        name: 'Dashboard',
        component: importedDashboardComponent
    },
    {
        path: '/login',
        name: 'loginComponent',
        component: importedLoginComponent
    },
    {
        path: '/signup',
        name: 'signupComponent',
        component: importedSignupComponent
    },
    {
        path: '/download',
        name: 'downloadappComponent',
        component: importedDownloadappComponent
    },
    {
        path: '/messages',
        name: 'messaging',
        component: importedMessagingComponent
    },
    {
        path: '/specifyDestination',//so whether the user types : /specifydestination or /specifyDestination, they would be routed here except a new character is introduced, then the user would be pointed to the 'notFound' route
        name: 'mapDestinationSetting',
        component: () => import('../views/mapDestinationSettingComponent.vue')
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'notFound',
        component: () => import('../views/dashboardComponent.vue')
    },
    {
        path: '/downloadformobile',
        name: 'downloadappspecificComponent',
        component: () => import('../views/downloadappspecificComponent.vue')
    },
    {
        path: '/subscribeToOurNewsLetter',
        name: 'subscribeToOurNewsLetterComponent',
        component: () => import('../views/subscribeToOurNewsLetterComponent.vue')
    },
    {
        path: '/quickstats',
        name: 'quickstatsComponent',
        component: () => import('../views/quickstatsComponent.vue')
    },
    {
        path: '/chatbox',
        name: 'chatboxComponent',
        component: () => import('../views/chatboxComponent.vue')
    },{
        path: '/widgetcontactus',
        name: 'widget_contactusComponent',
        component: () => import('../views/widget_contactUsComponent.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;