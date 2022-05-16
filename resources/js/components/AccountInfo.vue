<template>
    <div class="account__info">
        <form class="form" @submit.prevent="changeData">
            <div class="form__element">
                <label for="name" class="form__label"> Ваше имя </label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    placeholder="Ваше имя"
                    class="form__input"
                />
            </div>
            <div class="form__element">
                <label for="email" class="form__label"> Email </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    v-model="email"
                    placeholder="Email"
                    class="form__input"
                />
            </div>
            <div class="form__element">
                <label for="password" class="form__label"> Пароль </label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    v-model="password"
                    class="form__input"
                />
            </div>
            <div class="form__element">
                <label for="phone" class="form__label"> Телефон </label>
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="+7"
                    v-model="phone"
                    class="form__input"
                />
            </div>
        </form>
        <button type="submit" class="btn form__button">Сохранить</button>
    </div>
</template>

<script>
import { userStore } from "../store/userStore";
import axios from "axios";
import { ref } from "vue";

export default {
    name: "AccountInfo",
    setup() {
        const store = userStore();
        const name = ref(store.user.name);
        const phone = ref(store.user.phone);
        const email = ref(store.user.email);
        const password = ref("");
        const changeData = async () => {
            await axios.post("/api/account", {
                email: email.value,
                name: name.value,
                phone: phone.value,
                password: password.value,
            });
        };

        return {
            store,
            changeData,
            name,
            phone,
            email,
            password,
        };
    },
};
</script>

<style scoped lang="scss">
@import "resources/sass/app";
.form {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 686px;
    &__button {
        font-weight: 300;
        font-size: 14px;
        line-height: 18px;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: white;
    }
    &__element {
        min-width: 332px;
        padding-bottom: 20px;
        display: flex;
        flex-direction: column;
    }
    &__label {
        font-weight: 300;
        font-size: 16px;
        line-height: 24px;
        color: #58595b;
    }
    &__input {
        padding-top: 15px;
        padding-bottom: 15px;
        border: 1px solid #dfdbd4;
        background-color: #fff;
        color: #d3a785;
        ::placeholder {
            color: #d3a785;
        }
        :focus {
            outline: none;
        }
    }
}
@media (max-width: 720px) {
    .form {
        flex-direction: column;
    }
}

@media (max-width: 377px) {
    .form {
        &__element {
            min-width: 90vw;
        }
    }
}
</style>
