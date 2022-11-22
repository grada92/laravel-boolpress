import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import PostComponent from "./components/PostComponent";  //importo il componente per le rotta

const router = new VueRouter({
routes: [{path: '/', name:'home', component: PostComponent} ], //il componente importato
})

export default router;
