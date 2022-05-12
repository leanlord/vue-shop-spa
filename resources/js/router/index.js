import { createRouter, createWebHistory } from "vue-router";
import Account from "../components/Account";

const routes = [
    {
        path: "/account",
        name: "Account",
        component: Account,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
