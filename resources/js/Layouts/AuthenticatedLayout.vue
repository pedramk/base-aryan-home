<script setup>
import { IconDiamondFilled } from "@tabler/icons-vue";
</script>

<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div
            class="flex flex-wrap justify-between items-center mx-auto max-w-screen-md p-4"
        >
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img
                    src="/images/aryan-home-logo-a.png"
                    class="h-8"
                    alt="AH Logo"
                />
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <div
                    class="flex items-center rounded-lg py-1 px-3 text-sm text-gray-500 dark:text-white bg-blue-500 rtl:flex-row-reverse"
                >
                    <IconDiamondFilled :size="18" class="ms-1" />
                    <span class="block pt-1">1520</span>
                </div>
                <!-- <a
                    href="#"
                    class="text-sm text-blue-600 dark:text-blue-500 hover:underline"
                    >پروفایل</a
                > -->
            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-md px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul
                    class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm"
                >
                    <li>
                        <a
                            href="#"
                            class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page"
                            >پیشخان</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="text-gray-900 dark:text-white hover:underline"
                            >منابع انسانی</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div
        class="flex-grow bg-white shadow dark:border-x md:mt-0 max-w-screen-md mx-auto xl:p-0 dark:bg-gray-800 dark:border-gray-700"
    >
        <slot />
    </div>
</template>
