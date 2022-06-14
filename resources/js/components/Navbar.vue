<template>
    <nav class="px-4 py-[13px] md:py-4">
        <div class="max-w-[1140px] mx-auto flex justify-between items-center">
            <button class="md:hidden">
                <svg
                    width="22"
                    height="11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M1 10h20M1 1h20"
                        stroke="#F6F6F6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
            <a
                class="h-[33px] md:h-[38px]"
                href="#"
                title="Latvijas Mobilais Telefons"
            >
                <img
                    class="h-full"
                    src="https://lmt.mstatic.lv/lmt/images/mobile/logo_mobile.svg"
                    alt="Latvijas Mobilais Telefons"
                />
            </a>
            <ul
                class="flex items-center -mx-4 text-sm leading-none text-brand-light-gray"
            >
                <li class="hidden mx-4 md:block">
                    <a
                        class="flex items-center transition duration-200 hover:text-brand-red"
                        href="#"
                        title="Meklēt"
                    >
                        <svg
                            class="mr-[5px] w-7 h-7 md:w-4 md:h-4"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M9.222 15.444A6.222 6.222 0 1 0 9.222 3a6.222 6.222 0 0 0 0 12.444ZM17 17l-3.111-3.11"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                        <span>Meklēt</span>
                    </a>
                </li>
                <li class="hidden mx-4 md:block">
                    <a
                        class="flex items-center transition duration-200 hover:text-brand-red"
                        href="#"
                        title="Palīdzība"
                    >
                        <svg
                            class="mr-[5px] w-7 h-7 md:w-4 md:h-4"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2 5a2 2 0 0 1 2-2h2.8A3.2 3.2 0 0 1 10 6.2v11.2A2.4 2.4 0 0 0 7.6 15H4a2 2 0 0 1-2-2V5ZM18 5a2 2 0 0 0-2-2h-2.8A3.2 3.2 0 0 0 10 6.2v11.2a2.4 2.4 0 0 1 2.4-2.4H16a2 2 0 0 0 2-2V5Z"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                        <span>Palīdzība</span>
                    </a>
                </li>
                <li class="mx-4">
                    <a
                        class="flex items-center transition duration-200 hover:text-brand-red"
                        href="#"
                        title="Autorizēties"
                    >
                        <svg
                            class="mr-[5px] w-7 h-7 md:w-4 md:h-4"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M17 16.434v-1.625a3.25 3.25 0 0 0-3.25-3.25h-6.5A3.25 3.25 0 0 0 4 14.809v1.625M10.5 8.5a3.25 3.25 0 1 0 0-6.5 3.25 3.25 0 0 0 0 6.5Z"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                        <span class="hidden md:block">Autorizēties</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>
