import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Navbar from "./components/Navbar";
import Page from "./components/Page";
import Substances from "./components/Substances";

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
        { path: "/substances", name: "substances", component: Substances }
    ]
});
const app = new Vue({
    el: "#app",
    components: {
        App
    },
    router
});
