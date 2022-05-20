<template>
    <the-header></the-header>
    <main class="main">
        <modal-auth v-if="store.showModal"></modal-auth>
        <router-view></router-view>
    </main>
    <the-footer></the-footer>
</template>

<script>
import TheHeader from "./components/TheHeader";
import ModalAuth from "./components/ModalAuth";
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
    },
};
</script>

<style scoped lang="scss">
.main {
    flex-grow: 1;
}
</style>
