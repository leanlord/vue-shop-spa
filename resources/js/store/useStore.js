import { defineStore } from "pinia";

export const useStore = defineStore("main", {
    name: "Test",
    state: () => {
        return {
            currentModal: "",
            goods: {},
        };
    },
    actions: {
        async fetchGoods() {
            const {data: {
                data: { ...options }
            }} = await axios.get('/api/card');
            this.goods = options;
        },
    },
    getters: {
        getGoods(state) {
            return state.goods;
        },
    },
});
