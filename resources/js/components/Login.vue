<template>
    <form method="post" action="/api/login" @submit.prevent="login">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" v-model="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" v-model="password">
        <button type="submit">Send</button>
    </form>
    <button @click="norm">Test</button>
    <button @click="logout">Logout</button>
</template>

<script>
import {ref} from "vue";
import axios from "axios";

export default {
    name: "Login",
    setup() {
        const email = ref();
        const password = ref();
        const login = async () => {
            await axios.post('/api/login', {
                email: email.value,
                password: password.value,
            })
        }
        const norm = async () => {
            await axios.get('/api/user')
        }
        const logout = async () => {
            await axios.get('/api/logout')
        }

        return {
            email, password, login, norm, logout
        }
    }
}
</script>

<style scoped>

</style>
