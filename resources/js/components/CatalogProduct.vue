<template>
    <li class="product">
        <img class="product__image" :src="src" alt="Фото товара" />
        <p class="product__name">Товар</p>
        <p class="product__name">{{ color }}</p>
        <p class="product__price">{{ price }}$</p>
        <button
            @click="$emit('addProduct', id)"
            class="btn product__btn"
        >
            Добавить в корзину
        </button>
    </li>
</template>

<script>
import { goodsStore } from "../store/goodsStore";
import { ref } from "vue";

export default {
    name: "CatalogProduct",
    props: ["src", "name", "price", "id", "color"],
    emits: ["addProduct"],
    setup() {
        const store = goodsStore();
        let activeButton = ref("");

        return {
            store,
            activeButton,
        };
    },
};
</script>

<style scoped lang="scss">
@import "resources/sass/app";
.product {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 45px;
    &__list {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    &__name,
    &__price {
        font-style: normal;
        font-weight: 300;
        font-size: 18px;
        line-height: 30px;
        color: $dark-grey;
    }
    &__image {
        margin-bottom: auto;
        width: 300px;
    }
    &__btn {
        color: white;
    }
}

.active {
    background-color: #46474a;
}
</style>
