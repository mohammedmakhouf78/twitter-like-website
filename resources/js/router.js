import Vue from 'vue'
import Router from 'vue-router'
import home from './components/home/Home.vue'
import inbox from './components/inbox/Inbox.vue'
Vue.use(Router)

const routes = [
    {
        path:'/home',
        name:'home',
        component:home
    },
    {
        path:'/inbox',
        name:'inbox',
        component:inbox
    },
    {
        path: '*',
        redirect:{
            name:'home'
        }
    }
]

export default new Router({
    mode:'history',
    routes
})