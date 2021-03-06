import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.component('theme-switcher', require('./components/base/ThemeSwitcher').default);
Vue.component('side-nav', require('./components/base/navbar/SideNavbar').default);
const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});

routes.afterEach((to) => {
    gtag('config', 'UA-157166305-1', {
        page_path: to.fullPath,
        app_name: 'Portfolio',
        send_page_view: true,
    });
});