<script setup>
import { ref } from "vue";

const props = defineProps(["category"]);
const category = ref(props.category);
</script>

<template>
    <a
        v-if="category.type === 'normal'"
        class="w-full items-center grid grid-cols-2 hover:bg-brand-gray transition duration-200 py-[20px] border border-brand-gray rounded-[5px]"
        href="#"
        :title="category.name"
    >
        <div class="flex items-center justify-center w-full">
            <img
                class="h-[36px] md:h-[38px]"
                :src="category.icon"
                :alt="category.name"
            />
        </div>
        <div
            class="flex items-center justify-start h-full text-lg leading-none"
        >
            <span class="text-brand-light-gray">
                {{ category.name }}
            </span>
        </div>
    </a>
    <a
        v-if="category.type === 'filled'"
        class="bg-brand-bright-red w-full items-center flex justify-center py-[26px] border border-brand-bright-red rounded-[5px]"
        href="#"
        :title="category.name"
    >
        <span class="text-lg leading-none text-brand-light-gray">
            {{ category.name }}
        </span>
        <div class="flex items-center justify-center ml-[26px] md:ml-8">
            <img class="w-6 h-6" :src="category.icon" :alt="category.name" />
        </div>
    </a>
</template>
