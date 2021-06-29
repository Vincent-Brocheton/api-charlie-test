import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/:id",
    name: "SelectedFact",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(
        /* webpackChunkName : "SelectedFact" */ "../views/SelectedFact.vue"
      )
  },
  {
    path: "/new",
    name: "NewFormFact",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
        import(/* webpackChunkName : "NewFormFact" */ "../views/NewFormFact.vue"),
  },
  {
    path: "/:id/edit",
    name: "FormFact",
    component: () =>
        import(
            /* webpackChunkName : "FormFact" */ "../views/FormFact.vue"
            ),
  },
];

const router = new VueRouter({
  routes,
});

export default router;
