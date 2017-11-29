import Vue from 'vue'
import VueRouter from 'vue-router'
import calendar from 'vuejs-calendar'
import appel from './pages/appel.vue'
import home from './pages/home.vue'
import about from './pages/about.vue'

Vue.use(VueRouter)

const routes = [
    {path: '/home', component: home},
    {path: '/about', component: about}
]

const router = new VueRouter({
    routes
})

const app = new Vue({
    el: "#app",
    router: router,
    components: {
        'app-el': appel,
        'calendar': calendar
    },
    data: {
        msg: "Hello World",
        number: 1,
        link: 'http://google.com'
    },
    methods: {
        inc() {
            this.number++
        },
        dec() {
            this.number--
        }
    }
})