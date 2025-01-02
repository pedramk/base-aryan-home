<script setup>
import { Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineOptions({ layout: AuthenticatedLayout });
</script>

<template>
    <div>
        <div
            class="flex items-center justify-between p-6 sm:p-8 border-b text-gray-900 dark:text-white dark:border-gray-700"
        >
            <!-- <IconUserFilled :size="20" /> -->
            <h1 class="ms-1">پیشخان</h1>
        </div>
        <div class="p-6 sm:p-8"></div>
    </div>
</template>
