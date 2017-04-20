
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.component('example', require('./components/Example.vue'));
Vue.component('todo', require('./components/Todo.vue'));
window.onload = function () {
    const app = new Vue({
        el: '#app'
    });
};

