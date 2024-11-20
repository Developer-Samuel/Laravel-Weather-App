import { createRouter, createWebHistory } from 'vue-router';

import Index from './Pages/Weather/Index.vue';
import Error404 from './Errors/404.vue';

const routes = [
    { path: '/weather', component: Index, },
    { path: '/:pathMatch(.*)*', component: Error404 }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
