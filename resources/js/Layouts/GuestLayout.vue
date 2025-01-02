<script setup></script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900"
    >
        <div class="mb-6">
            <img
                src="/images/aryan-home-logo-a.png"
                class="h-12"
                alt="AH Logo"
            />
        </div>

        <div
            class="w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg dark:bg-gray-800"
        >
            <slot />
        </div>
    </div>
</template>
