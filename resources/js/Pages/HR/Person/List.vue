<script setup>
import { Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineOptions({ layout: AuthenticatedLayout });

const props = defineProps({
    people: Object,
});
</script>

<template>
    <div>
        <div
            class="flex items-center justify-between p-6 sm:p-8 border-b text-gray-900 dark:text-white dark:border-gray-700"
        >
            <!-- <IconUserFilled :size="20" /> -->
            <h1 class="ms-1">لیست پرسنل</h1>
            <Link
                href="/hr/people/create"
                class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            >
                افزودن
            </Link>
        </div>
        <div class="p-6 sm:p-8">
            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3">نام کامل</th>
                            <th scope="col" class="px-6 py-3">شغل</th>
                            <th scope="col" class="px-6 py-3">وضعیت</th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(person, index) in people"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                            :key="index"
                        >
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{ person.first_name }} {{ person.last_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ person.job_title_value }}
                            </td>
                            <td class="px-6 py-4"></td>
                            <td class="px-6 py-4">
                                <a
                                    href="#"
                                    class="font-medium text-blue-600 text-sm dark:text-blue-500 hover:underline"
                                    >ویرایش</a
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
