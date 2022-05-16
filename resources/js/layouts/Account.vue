<template>
    <p>Ваше имя: {{ store.user.name }}</p>
    <p>Ваш email: {{ store.user.email }}</p>
    <p>Телефон: {{ store.user.phone }}</p>

    <button @click="logout">Выйти</button>
</template>

<script>
import { userStore } from "../store/userStore";
import axios from "axios";
import router from "../router";

export default {
    name: "Account",
    setup() {
        const store = userStore();
        const logout = async () => {
            store.user = null;
            await axios.get("/api/logout");
            await router.push("/");
        };
        return {
            store,
            logout,
        };
    },
};
</script>

<style scoped></style>
