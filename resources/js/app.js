import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.component('theme-switcher', require('./components/base/ThemeSwitcher').default);

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});