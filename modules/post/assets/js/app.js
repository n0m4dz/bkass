import Vue from 'vue'
import VueRouter from 'vue-router'
import calendar from 'vuejs-calendar'
import appel from './pages/appel.vue'
import list from './pages/post-list.vue'
import create from './pages/post-create.vue'

Vue.use(VueRouter)

const routes = [
    {path: '/', component: list},
    {path: '/about', component: create}
]

const router = new VueRouter({
    routes,
    linkActiveClass: 'active'
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