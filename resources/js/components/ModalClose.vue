<template>
    <button @click="store.currentModal = ''">Закрыть</button>
</template>

<script>
import {authStore} from "../store/authStore";

export default {
    name: "ModalClose",
    setup() {
        const store = authStore();

        return {
            store
        }
    }
}
</script>

<style scoped>

</style>
