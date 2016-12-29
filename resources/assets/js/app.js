
/**
 * 首先加载此项目的所有 JavaScript 依赖，包括 Vue 和 Vue 资源。这是使用
 * Vue 和 Laravel 构建坚实强大的web应用程序所提供的极好起点.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
