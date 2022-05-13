import { createRouter, createWebHistory } from "vue-router";
import Account from "../layouts/Account";
import Catalog from "../layouts/Catalog";

const routes = [
    {
        path: "/account",
        name: "Account",
        component: Account,
    },
    {
        path: "/catalog",
        name: "Catalog",
        component: Catalog,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
