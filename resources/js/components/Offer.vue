<script setup>
import { ref } from "vue";

const medias = ref([
    {
        name: "Raised by wolves",
        imageUrl: "/images/media/1.png",
    },
    {
        name: "Westworld",
        imageUrl: "/images/media/2.png",
    },
    {
        name: "Perry Mason",
        imageUrl: "/images/media/3.png",
    },
    {
        name: "TV show",
        imageUrl: "/images/media/4.png",
    },
]);
</script>

<template>
    <section class="px-4 pb-[60px] md:pb-[93px]">
        <div class="mx-auto max-w-[1140px]">
            <h2
                class="mb-[30px] md:mb-10 text-[32px] font-bold text-center text-white md:text-left"
            >
                Īpašs piedāvājums tikai piektdien!
            </h2>
            <div
                class="items-center grid grid-cols-1 xl:grid-cols-5 gap-[36px] md:gap-[80px] md:mb-[36px] w-full bg-brand-gray/50 rounded-[5px] px-[19px] md:px-[70px] py-[28px] md:py-[35px]"
            >
                <div
                    class="flex flex-col items-start justify-center col-span-1 xl:col-span-2"
                >
                    <p
                        class="w-full mb-[14px] md:mb-1.5 text-[24px] leading-[34px] font-bold text-white text-center"
                    >
                        LMT Viedtelevīzija + HBO filmas un seriāli
                    </p>
                    <div
                        class="w-full mb-[12px] md:mb-[14px] flex justify-center"
                    >
                        <img
                            class="max-w-full"
                            src="/images/media/device.png"
                            alt="Device"
                            title="Device"
                        />
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <div class="mr-8">
                            <p
                                class="mb-2 md:mb-2.5 leading-none text-brand-dark-gray"
                            >
                                Iepriekš 24,99€/mēn
                            </p>
                            <div class="relative text-white">
                                <span class="text-[62px] leading-none">
                                    19
                                    <sup
                                        class="left-[-8px] top-[-22px] text-[32px]"
                                    >
                                        98
                                    </sup>
                                </span>
                                <span
                                    class="absolute bottom-[6px] right-[-6px] font-medium leading-none transform -translate-x-1/2"
                                >
                                    €/mēn.*
                                </span>
                            </div>
                        </div>
                        <a
                            class="self-end mb-2 px-4 py-[11px] border hover:bg-brand-red hover:text-white transition duration-200 border-brand-red rounded-[5px] flex items-center text-brand-red"
                            href="#"
                            title="Vairāk"
                        >
                            Vairāk
                            <svg
                                class="ml-2"
                                width="24"
                                height="24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M5 12.435h14M12 5.436l7 7-7 7"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="grid grid-cols-3 md:grid-cols-4 col-span-1 xl:col-span-3 gap-2.5 md:gap-3"
                >
                    <a
                        v-for="(media, index) in medias"
                        class="h-[132px] md:h-[200px] w-full rounded-[5px]"
                        :class="{ 'hidden md:block': index > 2 }"
                        href="#"
                        :title="media.name"
                    >
                        <img
                            class="max-w-full max-h-full h-full w-full object-cover object-center rounded-[5px]"
                            :src="media.imageUrl"
                            :alt="media.name"
                        />
                    </a>
                </div>
            </div>
            <p
                class="hidden text-lg leading-none text-brand-light-gray/50 md:block"
            >
                Akcija 29.11.2019. Piedāvājums attiecas uz noteiktām preču
                kategorijām. Piedāvājums neattiecas uz citu akciju precēm.
            </p>
        </div>
    </section>
</template>
