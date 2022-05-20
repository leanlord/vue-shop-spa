<template>
    <li class="product">
        <img class="product__image" :src="src" alt="Фото товара" />
        <p class="product__name">Платье-рубашка</p>
        <p class="product__price">{{ price }}$</p>
        <button class="btn product__btn">Добавить в корзину</button>
    </li>
</template>

<script>
export default {
    name: "CatalogGood",
    props: ["src", "name", "price"],
};
</script>

<style scoped lang="scss">
@import "resources/sass/app";
.product {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 45px;
    &__name,
    &__price {
        font-style: normal;
        font-weight: 300;
        font-size: 18px;
        line-height: 30px;
        color: $dark-grey;
    }
    &__image {
        width: 400px;
    }
    &__btn {
        color: white;
    }
}
</style>
