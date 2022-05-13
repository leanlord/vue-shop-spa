<template>
    <button @click="store.currentModal = ''">Закрыть</button>
</template>

<script>
import {useStore} from "../store/useStore";

export default {
    name: "ModalClose",
    setup() {
        const store = useStore();

        return {
            store
        }
    }
}
</script>

<style scoped>

</style>
