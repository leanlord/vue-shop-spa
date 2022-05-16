import { createRouter, createWebHistory } from "vue-router";
import { userStore } from "../store/userStore";
import { authStore } from "../store/authStore";
import TheFooter from "../components/TheFooter";

const routes = [
    {
        path: "/",
        name: "Home",
        component: TheFooter,
        meta: {
            auth: false,
        },
    },
    {
        path: "/account",
        name: "Account",
        component: () => import("../layouts/Account"),
        meta: {
            auth: true,
        },
    },
    {
        path: "/catalog",
        name: "Catalog",
        component: () => import("../layouts/Catalog"),
        meta: {
            auth: false,
        },
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

router.beforeEach(async (to, from, next) => {
    const requiredAuth = to.meta.auth;
    const store = userStore();
    const storeAuth = authStore();

    if (requiredAuth) {
        try {
            await store.fetchUser();
        } catch (e) {
            console.log(e);
        } finally {
            if (store.isAuth) {
                console.log("true");
                storeAuth.currentModal = "";
                next();
            } else {
                console.log("false");
                storeAuth.currentModal = "modalAuth";
            }
        }
    } else {
        next();
    }
});

export default router;
