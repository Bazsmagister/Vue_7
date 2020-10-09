import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Navbar from "./components/Navbar";
import Page from "./components/Page";
import Substances2 from "./components/Substances2";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/spa-page",
            name: "page",
            component: Page,
            props: {
                title: "This is the SPA Second Page",
                author: {
                    name: "Fisayo Afolayan",
                    role: "Software Engineer",
                    code: "Always keep it clean"
                }
            }
        },
        { path: "/substances2", name: "substances2", component: Substances2 }
    ]
});
const app = new Vue({
    el: "#app",
    components: {
        App
    },
    router
});
