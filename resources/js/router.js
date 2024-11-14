import { createRouter, createWebHistory } from 'vue-router';

import Index from './Pages/Weather/Index.vue';

const routes = [
    { path: '/weather', component: Index, },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
