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
            Товары
        </div>
    </div>
</template>

<script>
export default {
    name: "Catalog"
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
