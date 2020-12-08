/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Axios = require('axios');

window.moment = require('moment');

window.$ = window.jQuery = require('jquery');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('slider', require('./components/Slider.vue').default);
Vue.component('slider-new', require('./components/SliderNew.vue').default);
Vue.component('message', require('./components/Message.vue').default);
Vue.component('service-order', require('./components/ServiceOrder.vue').default);
Vue.component('service', require('./components/Service.vue').default);
Vue.component('blog', require('./components/Blog.vue').default);
Vue.component('tag', require('./components/Tag.vue').default);
Vue.component('client', require('./components/Client.vue').default);
Vue.component('notify', require('./components/Notification.vue').default);


Vue.component('admin', require('./components/Admin.vue').default);



axios.defaults.headers.common = {
    'X-CSRF-TOKEN': Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'remember_token': window.Laravel.remember_token,
};

// Vue.http.headers.common['remember_token'] = window.Laravel.remember_token;

// console.log(window.Laravel.remember_token);

// window.Vue.prototype.$http = axios;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
