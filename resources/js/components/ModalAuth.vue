<template>
    <modal-close></modal-close>
    <h2>Вход</h2>
    <p>Нет личного аккаунта?
        <a href="#" @click.prevent="store.currentModal = 'modalRegister'">Зарегестрируйтесь</a>
    </p>
    <form method="post" class="form" @submit.prevent="login">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" v-model="email" placeholder="Ваш email">
        <label for="password">Пароль</label>
        <input type="password" v-model="password" name="password" id="password">
        <div class="form__bottom">
            <div class="form__wrapper">
                <label for="checkbox">Запомнить меня</label>
                <input name="checkbox" id="checkbox" type="checkbox" class="form__checkbox">
            </div>
            <router-link to="/forget">Забыли пароль?</router-link>
        </div>
        <button class="btn">Войти</button>
    </form>
</template>

<script>
import {ref} from "vue";
import {authStore} from "../store/authStore";
import ModalClose from "./ModalClose";
import axios from "axios";
import router from "../router";

export default {
    name: "ModalAuth",
    components: {ModalClose},
    setup() {
        const store = authStore();
        const email = ref();
        const password = ref();
        const login = async () => {
            await axios.post('/api/login', {
                email: email.value,
                password: password.value,
            })
            await router.push('/account')
        }
        return {
            email, password, store, login
        }
    }
}
</script>

<style scoped>

</style>
