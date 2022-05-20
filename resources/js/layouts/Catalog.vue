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
            <catalog-product
                v-for="good in goods"
                :key="good"
                :src="good.img"
                :price="good.price"
            ></catalog-product>
        </div>
    </div>
</template>

<script>
import { authStore } from "../store/authStore";
import CatalogProduct from "../components/CatalogProduct";
import { onMounted } from "vue";
import { storeToRefs } from "pinia";

export default {
    name: "Catalog",
    setup() {
        const store = authStore();
        const { goods } = storeToRefs(store);
        onMounted(async () => {
            await store.fetchGoods();
        });

        return {
            goods,
        };
    },
    components: {
        CatalogProduct,
    },
};
</script>

<style scoped lang="scss">
@import "resources/sass/app";
.catalog {
    display: flex;

    &__filtration {
        margin-right: 25px;
        width: 330px;
    }

    &__list {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    &__item {
        display: flex;

        border-top: 1px solid #58595b;

        &:last-of-type {
            border-bottom: 1px solid #58595b;
        }
    }

    &__link {
        width: 322px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: 300;
        font-size: 14px;
        line-height: 18px;
        letter-spacing: 0.3em;
        text-decoration: none;
        text-align: center;
        color: $dark-grey;
        &:hover {
            background-color: #e4c5ad;
        }
        &:active {
            background-color: $beige;
        }
    }

    &__goods {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
}
</style>
