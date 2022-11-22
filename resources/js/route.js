import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import PostComponent from "./components/PostComponent";  //importo il componente per le rotta
import ContactComponent from "./components/ContactComponent";
import AboutComponent from "./components/AboutComponent";

const router = new VueRouter({
routes: [
    {path: '/', name:'home', component: PostComponent} ,
    { path:"/Contact", name:'Contact', component: ContactComponent},
    { path:"/About", name:'About Us', component: AboutComponent}

], //il componente importato
})

export default router;
