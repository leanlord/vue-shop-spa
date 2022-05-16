<template>
    <the-header></the-header>
    <component :is="store.currentModal"></component>
    <router-view></router-view>
    <the-footer></the-footer>
</template>

<script>
import TheHeader from "./components/TheHeader";
import ModalAuth from "./components/ModalAuth";
import ModalRegister from "./components/ModalRegister";
import { authStore } from "./store/authStore";
import TheFooter from "./components/TheFooter";
import ModalMobile from "./components/ModalMobile";

export default {
    name: "App",
    setup() {
        const store = authStore();
        return {
            store,
        };
    },
    components: {
        ModalMobile,
        TheFooter,
        TheHeader,
        ModalAuth,
        ModalRegister,
    },
};
</script>

<style scoped></style>
