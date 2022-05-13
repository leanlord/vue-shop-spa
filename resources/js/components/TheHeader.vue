<template>
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav__link">Женщинам</a>
            <a href="#" class="nav__link">Мужчинам</a>
            <a href="#" class="nav__link">Контакты</a>
        </nav>
        <div class="header__wrapper">
            <a href="#" class="header__link">
                Logo
            </a>
        </div>
        <div class="header__aside">
            <a href="tel:79034655304" class="header__link">+7 903 465 53 04</a>
            <router-link to="/account" class="header__link">Кабинет</router-link>
            <button @click="store.currentModal = 'modalAuth'">Авторизация</button>
        </div>
    </header>
</template>

<script>
import {useStore} from "../store/useStore";

export default {
    name: "TheHeader",
    setup() {
        const store = useStore();
        return {
            store
        }
    }
}
</script>

<style scoped lang="scss">
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 10px;
    padding-bottom: 10px;

    &__link {
        margin-right: 10px;
    }
}

.nav {
    display: flex;

    &__link {
        margin-right: 10px;
    }
}
</style>
