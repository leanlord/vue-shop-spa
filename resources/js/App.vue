<template>
    <the-header></the-header>
    <router-view></router-view>
</template>

<script>
import TheHeader from "./components/TheHeader";

export default {
    name: "App",
    components: {
        TheHeader
    }
}
</script>

<style scoped>

</style>
