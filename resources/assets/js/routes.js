import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    { name:'Home', path: '/', component: require('./components/Home.vue')},
    { name: 'People Management', path: '/people-management', component: require('./components/people/People.vue')}
];

export const router = new VueRouter({ routes });
export default router