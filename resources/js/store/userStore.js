import { defineStore } from "pinia";
import axios from "axios";

export const userStore = defineStore("user", {
    state: () => {
        return {
            user: null,
            logout: null,
        };
    },
    actions: {
        async fetchUser() {
            const { data } = await axios.get("/api/account");
            this.user = data;
        },
    },
    getters: {
        isAuth(state) {
            return state.user !== null;
        },
    },
});
