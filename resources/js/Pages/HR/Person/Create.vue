<script setup>
import { Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
    roles: Object,
    nationalities: Object,
    errors: Object,
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
    national_code: null,
    nationality: null,
    job_title: null,
    job_start_date: {
        day: null,
        month: null,
        year: null,
    },
    address: null,
});

const submitPerson = () => {
    console.log(person);
    person
        .transform((data) => ({
            ...data,
        }))
        .post("/hr/person/create");
};
console.log(props.roles);
</script>

<template>
    <Head title="Create" />
    <div class="">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-screen-sm mx-auto xl:p-0 dark:bg-gray-800 dark:border-gray-700"
        >
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-gray-900 dark:text-white">
                    فرم ثبت پرسنل جدید
                </h1>
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
                            <div v-if="person.errors.first_name">
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
                                >تابعیت</label
                            >
                            <select
                                id="person-nationality"
                                v-model="person.nationality"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>انتخاب تابعیت</option>
                                <option
                                    v-for="(label, value) in nationalities"
                                    :value="value"
                                >
                                    {{ label }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label
                                for="person-mobile"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >تلفن همراه</label
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
                                for="website"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >تاریخ تولد</label
                            >
                            <div class="grid gap-6 grid-cols-3">
                                <input
                                    type="text"
                                    id="person-birth-day"
                                    v-model="person.birthdate.day"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="روز"
                                />
                                <input
                                    type="text"
                                    id="person-birth-month"
                                    v-model="person.birthdate.month"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ماه"
                                />
                                <input
                                    type="text"
                                    id="person-birth-year"
                                    v-model="person.birthdate.year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="سال"
                                />
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
                                for="visitors"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >کد ملی</label
                            >
                            <input
                                type="text"
                                id="person-mobile"
                                v-model="person.national_code"
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>
                                    انتخاب عنوان شغلی
                                </option>
                                <option
                                    v-for="(label, value) in roles"
                                    :value="value"
                                >
                                    {{ label }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label
                                for="website"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >تاریخ شروع کار</label
                            >
                            <div class="grid gap-6 grid-cols-3">
                                <input
                                    type="text"
                                    id="person-job-start-day"
                                    v-model="person.job_start_date.day"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="روز"
                                />
                                <input
                                    type="text"
                                    id="person-job-start-month"
                                    v-model="person.job_start_date.month"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ماه"
                                />
                                <input
                                    type="text"
                                    id="person-job-start-year"
                                    v-model="person.job_start_date.year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="سال"
                                />
                            </div>
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
    </div>
</template>
