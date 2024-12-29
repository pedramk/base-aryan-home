<script setup>
import { Head } from "@inertiajs/vue3";

// defineProps({ user: Object })
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
                <form>
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                            />
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                            />
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="09125437413"
                                pattern="^(\+98|0)?9\d{9}$"
                                required
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
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="روز"
                                    required
                                />
                                <input
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ماه"
                                    required
                                />
                                <input
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="سال"
                                    required
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                            />
                        </div>
                        <div>
                            <label
                                for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >عنوان شغلی</label
                            >
                            <select
                                id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option disabled selected>انتخاب</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
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
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="روز"
                                    required
                                />
                                <input
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ماه"
                                    required
                                />
                                <input
                                    type="url"
                                    id="website"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="سال"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label
                            for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >آدرس</label
                        >
                        <input
                            type="text"
                            id="person-address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required
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
