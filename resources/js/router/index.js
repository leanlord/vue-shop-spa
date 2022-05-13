import { createRouter, createWebHistory } from "vue-router";
import Account from "../components/Account";
import AuthForm from "../components/AuthForm";
import Login from "../components/Login";

const routes = [
    {
        path: "/account",
        name: "Account",
        component: Account,
    },
    {
        path: "/auth",
        name: "Auth",
        component: AuthForm,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },

];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
