<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const titlePage = computed(() => usePage().props.titlePage);
</script>

<template>
    <AuthenticatedLayout>
        <div class="mb-4 text-2xl font-extrabold tracking-tight leading-none drop-shadow-sm text-gray-700 md:text-4xl lg:text-5xl dark:text-white">
            Buat Antrian Baru
        </div>

        <div class="p-5 w-1/2 bg-white border rounded-md">
            <form>

                <!-- Booking Date -->
                <div class="mb-6">
                    <label for="booking_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Booking</label>
                    <input type="datetime-local" name="booking_date" id="booking_date" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>

                <!-- Service Name -->
                <div class="mb-6">
                    <label for="service_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Servis</label>
                    <select id="service_name" name="booking_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Servis</option>
                        <option value="US">Servis A</option>
                        <option value="CA">Servis B</option>
                        <option value="FR">Servis C</option>
                        <option value="DE">Servis D</option>
                    </select>
                </div>

                <!-- Staff PIC -->
                <div class="mb-6">
                    <label for="staff" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Staff PIC</label>
                    <select id="staff" name="staff" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Staff</option>
                        <option value="US">Staff A</option>
                        <option value="CA">Staff B</option>
                        <option value="FR">Staff C</option>
                        <option value="DE">Staff D</option>
                    </select>
                </div>

                <!-- Doctor -->
                <div class="mb-6">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter PIC</label>
                    <select id="doctor" name="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Dokter</option>
                        <option value="US">Dokter A</option>
                        <option value="CA">Dokter B</option>
                        <option value="FR">Dokter C</option>
                        <option value="DE">Dokter D</option>
                    </select>
                </div>

                <!-- Doctor -->
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Status</option>
                        <option value="1">Booked</option>
                        <option value="2">On Progress</option>
                        <option value="3">Done</option>
                    </select>
                </div>

                <div class="w-full flex">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
