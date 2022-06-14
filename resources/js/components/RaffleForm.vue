<script setup>
import axios from "axios";
import { ref } from "vue";

const application = ref({
    name: "",
    email: "",
});

const notification = ref({
    messages: [],
    type: "",
});

const API_URL = "/api/v1/application";

async function submitForm() {
    await axios
        .post(API_URL, application.value)
        .then((response) => {
            application.value = {
                name: "",
                email: "",
            };

            notification.value.messages = [];
            notification.value.type = "success";
            notification.value.messages.push(response.data.message);
        })
        .catch((error) => {
            notification.value.type = "error";

            if (error.response.status === 500) {
                notification.value.messages.push("Server error");
                return;
            }

            const errorMessages = Object.values(error.response.data.errors);

            notification.value.messages = [];
            errorMessages.map((errorMessage) => {
                notification.value.messages.push(errorMessage[0]);
            });
        });
}
</script>

<template>
    <section class="px-4 bg-white pt-10 sm:pt-[70px] pb-[77px] sm:pb-[164px]">
        <div class="max-w-[1140px] mx-auto">
            <h3
                class="text-[32px] sm:text-4xl font-bold text-brand-gray mb-[39px] sm:mb-[70px]"
            >
                Pieteikties konkursam!
            </h3>
            <div
                class="mb-[30px] inline-flex border rounded-[5px] px-5 py-4"
                v-if="notification.messages.length > 0"
                :class="{
                    'border-green-600 bg-green-200 text-green-600':
                        notification.type === 'success',
                    'border-red-600 bg-red-200 text-red-600':
                        notification.type === 'error',
                }"
            >
                <ul :class="{ 'pl-4': notification.messages.length > 1 }">
                    <li
                        :class="{
                            'list-disc': notification.messages.length > 1,
                        }"
                        v-for="message in notification.messages"
                    >
                        {{ message }}
                    </li>
                </ul>
            </div>
            <form
                class="flex sm:-mx-2.5 sm:items-end sm:flex-row flex-col"
                method="POST"
                @submit.prevent="submitForm()"
            >
                <div class="sm:mx-2.5 mb-[30px] sm:mb-0">
                    <label
                        class="block mb-2 text-sm leading-none text-brand-medium-gray"
                        for="name"
                    >
                        Vārds, uzvārds
                    </label>
                    <input
                        class="w-full sm:w-auto px-6 py-5 leading-none rounded-[5px] text-brand-medium-gray bg-brand-light-gray border-brand-light-normal-gray border"
                        type="text"
                        placeholder="Vārds, uzvārds"
                        required
                        maxlength="255"
                        minlength="0"
                        v-model="application.name"
                    />
                </div>
                <div class="sm:mx-2.5 mb-[40px] sm:mb-0">
                    <label
                        class="block mb-2 text-sm leading-none text-brand-medium-gray"
                        for="name"
                    >
                        E-pasta adrese
                    </label>
                    <input
                        class="w-full sm:w-auto px-6 py-5 leading-none rounded-[5px] text-brand-medium-gray bg-brand-light-gray border-brand-light-normal-gray border"
                        type="email"
                        placeholder="E-pasta adrese"
                        required
                        maxlength="255"
                        minlength="0"
                        v-model="application.email"
                    />
                </div>
                <button
                    class="bg-brand-red sm:mx-2.5 flex items-center justify-center sm:justify-start text-white rounded-[5px] px-8 py-[18px]"
                >
                    Nosūtīt
                    <svg
                        class="ml-2"
                        width="20"
                        height="20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M3 10h14M10 3l7 7-7 7"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
            </form>
        </div>
    </section>
</template>
