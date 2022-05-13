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
import {useStore} from "./store/useStore";
import TheFooter from "./components/TheFooter";


export default {
    name: "App",
    setup() {
        const store = useStore()
        return {
            store
        }
    },
    components: {
        TheFooter,
        TheHeader, ModalAuth, ModalRegister
    }
}
</script>

<style scoped>

</style>
