/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    data: {
        message: "Hello Wue and world "
    }
});

var app2 = new Vue({
    el: "#app-2",
    data: {
        message: "You loaded this page on " + new Date().toLocaleString()
    }
});

var app3 = new Vue({
    el: "#app-3",
    data: {
        seen: true
    }
});

var app4 = new Vue({
    el: "#app-4",
    data: {
        todos: [
            { text: "Learn JavaScript" },
            { text: "Learn Vue" },
            { text: "Build something awesome" }
        ]
    }
});
var app5 = new Vue({
    el: "#app-5",
    data: {
        message: "Hello Vue.js!"
    },
    methods: {
        reverseMessage: function() {
            this.message = this.message
                .split("")
                .reverse()
                .join("");
        }
    }
});

var app6 = new Vue({
    el: "#app-6",
    data: {
        message: "Hello Vue!"
    }
});
