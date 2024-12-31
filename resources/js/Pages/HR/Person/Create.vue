<script setup>
import { inject } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { IconUserFilled } from "@tabler/icons-vue";

defineOptions({ layout: AuthenticatedLayout });

const notify = inject("notify");

const props = defineProps({
    jobs: Object,
    nationalities: Object,
    months: Object,
});

const person = useForm({
    first_name: null,
    last_name: null,
    mobile: null,
    birthdate: {
        day: null,
        month: null,
        year: null,
    },
    personal_code: null,
    national_id: null,
    nationality: null,
    job_title: null,
    job_start_date: {
        day: null,
        month: null,
        year: null,
    },
    address: null,
});

const zeroPad = (num, places) => String(num).padStart(places, "0");

const submitPerson = () => {
    person
        .transform((data) => ({
            ...data,
        }))
        .post("/hr/people/create", {
            preserveState: true,
            onSuccess: () => {
                notify.success("پرسنل با موفقیت افزوده شد.");
            },
        });
};
</script>

<template>
    <Head title="Create" />

    <div class="">
        <div
            class="flex items-center p-6 sm:p-8 border-b text-gray-900 dark:text-white dark:border-gray-700"
        >
            <IconUserFilled :size="20" />
            <h1 class="ms-1">افزودن پرسنل جدید</h1>
        </div>
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <form @submit.prevent="submitPerson">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label
                            for="person-first-name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >نام</label
                        >
                        <input
                            type="text"
                            id="person-first-name"
                            v-model="person.first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                        <div
                            class="text-red-500 text-sm mt-2"
                            v-if="person.errors.first_name"
                        >
                            {{ person.errors.first_name }}
                        </div>
                    </div>
                    <div>
                        <label
                            for="person-last-name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >نام خانوادگی</label
                        >
                        <input
                            type="text"
                            id="person-last-name"
                            v-model="person.last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                    </div>
                    <div>
                        <label
                            for="person-nationality"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >ملیت</label
                        >
                        <select
                            id="person-nationality"
                            v-model="person.nationality"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option disabled selected>انتخاب ملیت</option>
                            <option
                                v-for="(label, value, index) in nationalities"
                                :value="value"
                                :key="index"
                            >
                                {{ label }}
                            </option>
                        </select>
                    </div>
                    <div>
                        <label
                            for="person-mobile"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >شماره موبایل</label
                        >
                        <input
                            type="tel"
                            id="person-mobile"
                            v-model="person.mobile"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="09125437413"
                            pattern="^(\+98|0)?9\d{9}$"
                        />
                    </div>
                    <div>
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >تاریخ تولد</label
                        >
                        <div class="grid gap-6 grid-cols-3">
                            <select
                                id="person-birth-day"
                                v-model="person.birthdate.day"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>روز</option>
                                <option
                                    v-for="day in 31"
                                    :value="zeroPad(day, 2)"
                                    :key="day"
                                >
                                    {{ day }}
                                </option>
                            </select>
                            <select
                                id="person-birth-month"
                                v-model="person.birthdate.month"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>ماه</option>
                                <option
                                    v-for="(label, value, index) in months"
                                    :value="value"
                                    :key="index"
                                >
                                    {{ label }}
                                </option>
                            </select>
                            <select
                                id="person-birth-year"
                                v-model="person.birthdate.year"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>سال</option>
                                <option
                                    v-for="day in 40"
                                    :value="day + 1350"
                                    :key="day"
                                >
                                    {{ day + 1350 }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label
                            for="person-pid"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >کد پرسنلی</label
                        >
                        <input
                            type="text"
                            id="person-pid"
                            v-model="person.personal_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                    </div>
                    <div>
                        <label
                            for="person-national-id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >کد ملی</label
                        >
                        <input
                            type="text"
                            id="person-national-id"
                            v-model="person.national_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                    </div>
                    <div>
                        <label
                            for="person-job-title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >عنوان شغلی</label
                        >
                        <select
                            id="person-job-title"
                            v-model="person.job_title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option disabled selected>انتخاب عنوان شغلی</option>
                            <option
                                v-for="(label, value, index) in jobs"
                                :value="value"
                                :key="index"
                            >
                                {{ label }}
                            </option>
                        </select>
                    </div>
                    <div>
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >تاریخ شروع کار</label
                        >
                        <div class="grid gap-6 grid-cols-3">
                            <select
                                id="person-job-start-day"
                                v-model="person.job_start_date.day"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>روز</option>
                                <option
                                    v-for="day in 31"
                                    :value="zeroPad(day, 2)"
                                    :key="day"
                                >
                                    {{ day }}
                                </option>
                            </select>
                            <select
                                id="person-job-start-month"
                                v-model="person.job_start_date.month"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>ماه</option>
                                <option
                                    v-for="(label, value, index) in months"
                                    :value="value"
                                    :key="index"
                                >
                                    {{ label }}
                                </option>
                            </select>
                            <select
                                id="person-job-start-year"
                                v-model="person.job_start_date.year"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>سال</option>
                                <option
                                    v-for="day in 10"
                                    :value="day + 1350"
                                    :key="day"
                                >
                                    {{ day + 1394 }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex items-center mb-6">
                    <input
                        id="create-account"
                        type="checkbox"
                        value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    />
                    <label
                        for="create-account"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >ساخت حساب کاربری و رمز عبور در سامانه</label
                    >
                </div>
                <div
                    class="border-b mb-4 pb-2 text-gray-900 dark:text-white dark:border-gray-700"
                >
                    محل سکونت
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label
                            for="person-province"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >استان</label
                        >
                        <input
                            type="text"
                            id="person-province"
                            v-model="person.last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                    </div>
                    <div>
                        <label
                            for="person-city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >شهر</label
                        >
                        <input
                            type="text"
                            id="person-city"
                            v-model="person.last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        />
                    </div>
                </div>
                <div class="mb-6">
                    <label
                        for="person-address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >آدرس</label
                    >
                    <input
                        type="text"
                        id="person-address"
                        v-model="person.address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    />
                </div>
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    ثبت پرسنل
                </button>
            </form>
        </div>
    </div>
</template>
