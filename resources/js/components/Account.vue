<template>
    Test account, name: {{ name }}
</template>

<script>
import {useStore} from "../store/useStore";

export default {
    name: "Account",
    setup() {
        const {name} = useStore();

        return {
            name
        }
    }
}
</script>

<style scoped>

</style>
