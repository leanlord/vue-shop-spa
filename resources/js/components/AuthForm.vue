<template>
    <form method="post" action="/api/register" @submit.prevent="getCookie">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" v-model="name">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" v-model="email">
        <label for="password">Passwords</label>
        <input type="password" id="password" name="password" v-model="password">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" v-model="password_confirmation">
        <button type="submit">Send</button>
    </form>
</template>

<script>
import axios from "axios";
import {ref} from "vue";

export default {
    name: "AuthForm",
    setup() {
        const name = ref();
        const email = ref();
        const password = ref();
        const password_confirmation = ref();
        const getCookie = async () => {
            await axios.get('/sanctum/csrf-cookie').then(response => {

            })
            await axios.post('/api/register', {
                name: name.value,
                email: email.value,
                password: password.value,
                password_confirmation: password_confirmation.value,
            }).then(response => {
                console.log(response);
            })
        }

        return {
            getCookie, name, email, password, password_confirmation
        }
    }
}
</script>

<style scoped>

</style>
