<script setup>
import { ref } from "vue";

const categories = ref([
    {
        name: "Telefoni",
        icon: "/images/categories/telefoni.svg",
        type: "normal",
    },
    {
        name: "Planšetes",
        icon: "/images/categories/plansetes.svg",
        type: "normal",
    },
    {
        name: "Datori",
        icon: "/images/categories/datori.svg",
        type: "normal",
    },
    {
        name: "Televizori",
        icon: "/images/categories/televizori.svg",
        type: "normal",
    },
    {
        name: "Viedpalīgi",
        icon: "/images/categories/viedpaligi.svg",
        type: "normal",
    },
    {
        name: "Droni",
        icon: "/images/categories/droni.svg",
        type: "normal",
    },
    {
        name: "Aksesuāri",
        icon: "/images/categories/aksesuari.svg",
        type: "normal",
    },
    {
        name: "Visas iekārtas",
        icon: "/images/categories/arrow_right.svg",
        type: "filled",
    },
]);
</script>

<template>
    <section class="pb-[68px] sm:b-[100px] px-4">
        <div
            class="max-w-[1140px] mx-auto grid grid-cols-1 sm:grid-cols-4 gap-2.5 sm:gap-[30px]"
        >
            <CategoryItem v-for="category in categories" :category="category" />
        </div>
    </section>
</template>
