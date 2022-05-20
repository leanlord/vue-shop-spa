import { defineStore } from "pinia";
import axios from "axios";

export const authStore = defineStore("main", {
    state: () => {
        return {
            showModal: false,
            showMobileModal: false,
            goods: {},
        };
    },
    actions: {
        async fetchGoods() {
            const {
                data: {
                    data: { ...options },
                },
            } = await axios.get("/api/clothes");
            this.goods = options;
        },
        openModal() {
            this.showModal = true;
            document.body.style.overflow = "hidden";
        },
        closeModal() {
            this.showModal = false;
            document.body.style.overflow = "auto";
        },
    },
    getters: {
        getGoods(state) {
            return state.goods;
        },
    },
});
