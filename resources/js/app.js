import Vue from "vue"
import App from "./App.vue";
import Paginate from 'vuejs-paginate'
import router from "./router/index.js";
import "bootstrap";
import "./utils/axios.js";

Vue.component('paginate', Paginate)

Vue.mixin({
    data() {
        return {
            host: 'http://localhost:8000/'
        }
    }
});

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
