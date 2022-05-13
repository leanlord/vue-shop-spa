import { defineStore } from "pinia";

export const useStore = defineStore('main', {
    name: 'Test',
    state: () => {
        return {
            currentModal: '',
        }
    }
})
