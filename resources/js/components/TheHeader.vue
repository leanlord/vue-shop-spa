<template>
    <header class="header">
        <nav class="nav">
            <router-link to="/catalog" class="nav__link">Женщинам</router-link>
            <router-link to="/catalog" class="nav__link">Мужчинам</router-link>
            <a href="#" class="nav__link">Контакты</a>
        </nav>
        <div class="header__wrapper">
            <router-link to="/">
                <svg width="162" height="38" viewBox="0 0 162 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 18.9909C0 8.46769 7.94016 0 19.1546 0C25.9397 0 31.888 3.47439 34.9349 8.84059L32.461 10.2595C30.0416 5.73911 24.9392 2.6831 19.1546 2.6831C9.47726 2.6831 2.79224 9.94112 2.79224 18.9909C2.79224 28.0407 9.47726 35.2987 19.1546 35.2987C24.9938 35.2987 30.1508 32.1972 32.5701 27.5677L35.044 28.9866C32.0426 34.4074 26.0488 37.9818 19.1546 37.9818C7.94926 37.9818 0 29.5141 0 18.9909Z"
                        fill="#58595B"/>
                    <path
                        d="M48.214 18.9909C48.214 8.46769 56.5816 0 67.2049 0C77.8373 0 86.1958 8.46769 86.1958 18.9909C86.1958 29.5141 77.8282 37.9818 67.2049 37.9818C56.5725 37.9818 48.214 29.5141 48.214 18.9909ZM83.4036 18.9909C83.4036 9.94112 76.3002 2.6831 67.1958 2.6831C58.0915 2.6831 50.988 9.94112 50.988 18.9909C50.988 28.0407 58.0915 35.2987 67.1958 35.2987C76.3002 35.3078 83.4036 28.0407 83.4036 18.9909Z"
                        fill="#58595B"/>
                    <path
                        d="M111.972 22.2562V37.4089H109.18V22.2562L95.764 0.582153H98.9201L110.598 19.5731L122.222 0.582153H125.378L111.972 22.2562Z"
                        fill="#58595B"/>
                    <path
                        d="M136.22 29.3043L138.639 27.8854C139.903 32.3057 143.641 35.3071 149.69 35.3071C155.847 35.3071 158.949 32.1511 158.949 27.94C158.949 23.5197 155.056 21.837 149.426 20.0453C143.269 18.0443 137.748 16.3071 137.748 9.89497C137.748 3.84662 142.641 0.00842285 148.899 0.00842285C154.947 0.00842285 158.949 3.48281 160.731 7.73939L158.367 9.05821C157.002 5.74753 154.156 2.69152 148.899 2.69152C143.796 2.69152 140.585 5.69296 140.585 9.79492C140.585 14.2152 144.324 15.5795 149.581 17.3167C156.102 19.4723 161.787 21.5278 161.787 27.8945C161.787 33.9974 157.002 37.9993 149.69 37.9993C142.796 37.9811 137.902 34.5158 136.22 29.3043Z"
                        fill="#58595B"/>
                </svg>
            </router-link>
        </div>
        <div class="header__aside">
            <a href="tel:79034655304" class="header__link">+7 903 465 53 04</a>
            <router-link to="/account" class="header__link">Кабинет</router-link>
            <a href="#">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.5 4H12C12 1.79 10.21 0 8 0C5.79 0 4 1.79 4 4H0.5C0.22 4 0 4.22 0 4.5V16.5C0 16.78 0.22 17 0.5 17H15.5C15.78 17 16 16.78 16 16.5V4.5C16 4.22 15.78 4 15.5 4ZM8 1C9.65 1 11 2.35 11 4H5C5 2.35 6.35 1 8 1ZM15 16H1V5H15V16Z"
                        fill="#58595B"/>
                </svg>
            </a>
            <!--            <button @click="store.currentModal = 'modalAuth'">Авторизация</button>-->
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

<style lang="scss">
@import 'resources/sass/app';

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 40px;
    padding-bottom: 40px;

    &__aside {
        display: flex;
        align-items: center;
    }

    &__link {
        font-weight: 300;
        font-size: 12px;
        line-height: 21px;
        text-transform: uppercase;
        text-decoration: none;
        color: $dark-grey;
        margin-right: 22px;
    }
}

.nav {
    display: flex;

    &__link {
        font-weight: 300;
        font-size: 12px;
        line-height: 21px;
        text-transform: uppercase;
        text-decoration: none;
        color: $dark-grey;
    }
}

.nav__link:not(:last-child) {
    margin-right: 25px;
}
</style>
