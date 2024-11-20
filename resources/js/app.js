import { createApp } from 'vue';
import App from './Pages/App.vue';
import router from './router';

import Index from './Pages/Weather/Index.vue';

const app = createApp(App);

app.component('index', Index);

app.use(router).mount('#app');
