import { defineStore } from "pinia";

export const modalMobileStore = defineStore("mobile", {
    state: () => {
        return {
            options: [
                {
                    id: 0,
                    title: "Мужчинам",
                    link: "/catalog",
                },
                {
                    id: 1,
                    title: "Женщинам",
                    link: "/catalog",
                },
                {
                    id: 2,
                    title: "Кабинет",
                    link: "/account",
                },
                {
                    id: 3,
                    title: "Контакты",
                    link: "/",
                },
                {
                    id: 4,
                    title: "Про бренд",
                    link: "/",
                },
            ],
        };
    },
});
