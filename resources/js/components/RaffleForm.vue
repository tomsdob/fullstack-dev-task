<template>
    <section class="px-4 bg-white pt-[70px] pb-[164px]">
        <div class="max-w-[1140px] mx-auto">
            <h3 class="text-4xl font-bold text-brand-gray mb-[70px]">
                Pieteikties konkursam!
            </h3>
            <form class="flex -mx-2.5 items-end">
                <div class="mx-2.5">
                    <label
                        class="block mb-2 text-sm leading-none text-brand-medium-gray"
                        for="name"
                    >
                        Vārds, uzvārds
                    </label>
                    <input
                        class="px-6 py-5 leading-none rounded-[5px] text-brand-medium-gray bg-brand-light-gray border-brand-light-normal-gray border"
                        type="text"
                        placeholder="Vārds, uzvārds"
                    />
                </div>
                <div class="mx-2.5">
                    <label
                        class="block mb-2 text-sm leading-none text-brand-medium-gray"
                        for="name"
                    >
                        E-pasta adrese
                    </label>
                    <input
                        class="px-6 py-5 leading-none rounded-[5px] text-brand-medium-gray bg-brand-light-gray border-brand-light-normal-gray border"
                        type="email"
                        placeholder="E-pasta adrese"
                    />
                </div>
                <button
                    class="bg-brand-red mx-2.5 flex items-center text-white rounded-[5px] px-8 py-[18px]"
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
