import { createRouter, createWebHistory } from "vue-router";
import { userStore } from "../store/userStore";
import { modalStore } from "../store/modalStore";
import Catalog from "../layouts/Catalog";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Catalog,
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
    const storeAuth = modalStore();

    if (requiredAuth) {
        try {
            await store.fetchUser();
        } catch (e) {
            console.log(e);
        } finally {
            if (store.isAuth) {
                next();
            } else {
                storeAuth.openModal();
            }
        }
    } else {
        next();
    }
});

router.afterEach((to, from) => {
    const storeAuth = modalStore();
    storeAuth.closeModal();
    storeAuth.showMobileModal = false;
});
export default router;
