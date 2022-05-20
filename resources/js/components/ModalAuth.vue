<template>
    <div class="wrapper">
        <div class="modal">
            <button class="modal__button" @click="store.closeModal">
                <svg
                    width="23"
                    height="23"
                    viewBox="0 0 23 23"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M16.4497 5.84306L17.1569 6.55016L12.2071 11.4999L17.1569 16.4497L16.4497 17.1568L11.5 12.207L6.55025 17.1568L5.84315 16.4497L10.7929 11.4999L5.84315 6.55016L6.55025 5.84306L11.5 10.7928L16.4497 5.84306Z"
                        fill="#58595B"
                    />
                </svg>
            </button>
            <div class="modal__card">
                <h2 class="modal__title">
                    {{ loginModule ? "Вход" : "Регистрация" }}
                </h2>
                <p class="modal__text">
                    {{
                        loginModule
                            ? "Нет личного аккаунта?"
                            : "У меня уже есть аккаунт."
                    }}
                    <a
                        class="modal__link"
                        href="#"
                        @click.prevent="changeModal"
                        >{{ loginModule ? "Зарегестрироваться" : "Войти" }}</a
                    >
                </p>
                <form
                    class="form modal__form"
                    method="post"
                    id="form"
                    @submit.prevent="auth"
                >
                    <div v-if="!loginModule" class="form__element">
                        <label class="form__label" for="name">Имя</label>
                        <input
                            class="form__input"
                            type="text"
                            name="name"
                            id="name"
                            v-model="name"
                            placeholder="Ваше имя"
                        />
                    </div>
                    <div class="form__element">
                        <label class="form__label" for="email">Email</label>
                        <input
                            class="form__input"
                            type="email"
                            name="email"
                            id="email"
                            v-model="email"
                            placeholder="Ваш email"
                        />
                    </div>
                    <div class="form__element">
                        <label class="form__label" for="password">Пароль</label>
                        <input
                            class="form__input"
                            type="password"
                            v-model="password"
                            name="password"
                            id="password"
                        />
                    </div>
                    <!--        <div class="form__bottom">-->
                    <!--            <div class="form__wrapper">-->
                    <!--                <label for="checkbox">Запомнить меня</label>-->
                    <!--                <input-->
                    <!--                    name="checkbox"-->
                    <!--                    id="checkbox"-->
                    <!--                    type="checkbox"-->
                    <!--                    class="form__checkbox"-->
                    <!--                />-->
                    <!--            </div>-->
                    <!--            <router-link to="/forget">Забыли пароль?</router-link>-->
                    <!--        </div>-->
                </form>
                <button type="submit" form="form" class="btn form__button">
                    {{ loginModule ? "Войти" : "Зарегестрироваться" }}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
import { authStore } from "../store/authStore";
import axios from "axios";
import router from "../router";

export default {
    name: "ModalAuth",
    emits: ["closeModal"],
    setup() {
        let loginModule = ref(true);
        const store = authStore();
        const email = ref();
        const password = ref();
        const name = ref();
        const auth = async () => {
            if (name.value) {
                await axios.post("/api/register", {
                    name: name.value,
                    email: email.value,
                    password: password.value,
                    password_confirmation: password.value,
                });
            } else {
                await axios.post("/api/login", {
                    email: email.value,
                    password: password.value,
                });
            }
            await router.push("/account");
        };
        const changeModal = () => {
            loginModule.value = !loginModule.value;
        };
        return {
            email,
            password,
            name,
            store,
            auth,
            loginModule,
            changeModal,
        };
    },
};
</script>

<style scoped lang="scss">
@import "resources/sass/app";
.modal {
    z-index: 3;
    position: relative;
    max-width: 493px;
    padding: 45px 55px 65px;
    background-color: #f9f8f6;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    &__button {
        position: absolute;
        top: 0;
        right: 0;
        padding-top: 11px;
        padding-right: 11px;
        border-style: none;
        background-color: transparent;
        cursor: pointer;
    }
    &__card {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    &__title {
        margin-bottom: 12px;
        font-weight: 300;
        font-size: 48px;
        color: $dark-grey;
    }
    &__text {
        margin-bottom: 24px;
        font-weight: 300;
        font-size: 16px;
        line-height: 24px;
        color: $dark-grey;
    }
    &__link {
        color: #c18562;
    }
    &__form {
        flex-direction: column;
        flex-wrap: nowrap;
        margin-bottom: 5px;
    }
}
.wrapper {
    position: fixed;
    z-index: 3;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.5);
}

@media (max-width: 548px) {
    .modal {
        max-width: none;
        width: 100%;
        height: 100%;
    }
}
</style>
