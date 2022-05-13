<template>
    <modal-close></modal-close>
    <h2>Регистрация</h2>
    <p>У меня уже есть аккаунт
        <a href="#" @click.prevent="store.currentModal = 'modalAuth'">Войти</a>
    </p>
    <form method="post" class="form" @submit.prevent="register">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" v-model="name" placeholder="Ваше имя и фамилия">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" v-model="email" placeholder="Ваш email">
        <label for="password">Пароль</label>
        <input type="password" v-model="password" name="password" id="password">
        <label for="password_confirmation">Пароль</label>
        <input type="password" v-model="passwordConfirmation" name="password_confirmation" id="password_confirmation">
        <button class="btn">Зарегестрироваться</button>
    </form>
</template>

<script>
import {ref} from "vue";
import axios from "axios";
import {useStore} from "../store/useStore";
import ModalClose from "./ModalClose";

export default {
    name: "ModalRegister",
    components: {ModalClose},
    setup() {
        const name = ref();
        const email = ref();
        const password = ref();
        const passwordConfirmation = ref();
        const store = useStore();

        const register = async () => {
            await axios.post('/api/register', {
                name: name.value,
                email: email.value,
                password: password.value,
                password_confirmation: passwordConfirmation.value
            })
        }
        return {
            name, email, password, passwordConfirmation, register, store
        }
    }
}
</script>

<style scoped>

</style>
