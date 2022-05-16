<template>
    <div class="catalog">
        <div class="catalog__filtration">
            <ul class="catalog__list">
                <li class="catalog__item">
                    <a href="#" class="catalog__link">Sale</a>
                </li>
                <li class="catalog__item">
                    <a href="#" class="catalog__link">New</a>
                </li>
                <li class="catalog__item">
                    <a href="#" class="catalog__link">Специальные позиции</a>
                </li>
                <li class="catalog__item">
                    <a href="#" class="catalog__link">Bestsellers</a>
                </li>
                <li class="catalog__item">
                    <a href="#" class="catalog__link">Вся одежда</a>
                </li>
                <li class="catalog__item">
                    <a href="#" class="catalog__link">Цвет</a>
                </li>
            </ul>
        </div>
        <div class="catalog__goods">
            <ul>
                <li v-for="good in store.goods" :key="good">
                    Цвет: {{ good.color }}
                    Размер: {{ good.size }}
                    <img :src="good.img" alt="Norm" width="100">
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import {authStore} from "../store/authStore";
import {onMounted} from "vue";

export default {
    name: "Catalog",
    setup() {
        const store = authStore();
        onMounted(async () => {
            await store.fetchGoods();
        })

        return {
            store,
        }
    }
}
</script>

<style scoped lang="scss">
.catalog {
    display: flex;

    &__filtration {
        width: 330px;
        margin-right: 30px;
    }

    &__list {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
    }

    &__item {
        padding-top: 10px;
        padding-bottom: 10px;
    }
}
</style>
