<script setup>
const DAYS_TO_ADD = 20;

const startDate = new Date();
const endDate = new Date(2022, 5, 9 + DAYS_TO_ADD);

const countdownTime = endDate - startDate;
</script>

<template>
    <section class="px-4 py-[42px] md:py-14">
        <vue-countdown
            class="max-w-[1140px] mx-auto flex items-center justify-center"
            :time="countdownTime"
            v-slot="{ days, hours, minutes, seconds }"
        >
            <div class="text-brand-red text-center mr-[50px] md:mr-[88px]">
                <span
                    class="block mb-[7px] md:mb-[9px] text-[40px] md:text-[50px] font-bold leading-[40px]"
                >
                    {{ days }}
                </span>
                <span class="block text-sm leading-none">dienas</span>
            </div>
            <div class="flex items-start -mx-2.5 md:-mx-5">
                <div class="mx-2.5 md:mx-5 text-center text-white">
                    <span
                        class="block mb-[7px] md:mb-[9px] text-[40px] md:text-[50px] font-bold leading-[40px]"
                    >
                        {{ hours }}
                    </span>
                    <span class="block text-sm leading-none">stundas</span>
                </div>
                <div class="mx-2.5 md:mx-5 text-center text-white">
                    <span
                        class="block mb-[7px] md:mb-[9px] text-[30px] md:text-[40px] font-bold leading-[32px]"
                    >
                        :
                    </span>
                </div>
                <div class="mx-2.5 md:mx-5 text-center text-white">
                    <span
                        class="block mb-[7px] md:mb-[9px] text-[40px] md:text-[50px] font-bold leading-[40px]"
                    >
                        {{ minutes }}
                    </span>
                    <span class="block text-sm leading-none">minūtes</span>
                </div>
                <div class="mx-2.5 md:mx-5 text-center text-white">
                    <span
                        class="block mb-[7px] md:mb-[9px] text-[30px] md:text-[40px] font-bold leading-[32px]"
                    >
                        :
                    </span>
                </div>
                <div class="mx-2.5 md:mx-5 text-center text-white">
                    <span
                        class="block mb-[7px] md:mb-[9px] text-[40px] md:text-[50px] font-bold leading-[40px]"
                    >
                        {{ seconds }}
                    </span>
                    <span class="block text-sm leading-none">sekundes</span>
                </div>
            </div>
        </vue-countdown>
    </section>
</template>
