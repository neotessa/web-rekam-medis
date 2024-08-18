<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { usePage, Link, useForm } from "@inertiajs/vue3";
import { computed } from "vue";

const titlePage = computed(() => usePage().props.titlePage);
</script>

<template>
    <AuthenticatedLayout>
        <div class="mb-4 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold tracking-tight leading-none drop-shadow-sm text-gray-700 dark:text-white">
            Buat Antrian Baru
        </div>

        <div class="p-3 sm:p-5 w-full sm:w-3/4 md:w-2/3 lg:w-1/2 bg-white border rounded-md ">
            <form>
                <!-- Form fields remain the same, just adjusting the margin bottom -->
                <div class="mb-4 sm:mb-6">
                    <!-- Booking Date -->
                    <label for="booking_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Booking</label>
                    <input type="datetime-local" name="booking_date" id="booking_date" class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>

                <div class="mb-4 sm:mb-6">
                    <!-- Service Name -->
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Servis</label>
                    <select id="service" name="service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Servis</option>
                        <option value="1">Rawat Inap</option>
                        <option value="2">Rawat Jalan</option>
                    </select>
                </div>

                <!-- Staff PIC -->
                <div class="mb-6">
                    <label for="staff" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Staff PIC</label>
                    <select id="staff" name="staff" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <!-- Foreach all the staff via eloquent relation to get all the staff -->
                        <option selected>Pilih Staff</option>
                        <option value="US">Staff A</option>
                        <option value="CA">Staff B</option>
                        <option value="FR">Staff C</option>
                        <option value="DE">Staff D</option>
                    </select>
                </div>

                <!-- Client -->
                <div class="mb-6">
                    <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Klien / Owner</label>
                    <select id="client" name="client" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <!-- Foreach all the Client via eloquent relation to get all the staff -->
                        <option selected>Pilih Klien / Owner</option>
                        <option value="US">Klien / Owner A</option>
                        <option value="CA">Klien / Owner B</option>
                        <option value="FR">Klien / Owner C</option>
                        <option value="DE">Klien / Owner D</option>
                    </select>
                </div>

                <!-- Patient -->
                <div class="mb-6">
                    <label for="patient" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
                    <select id="patient" name="patient" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <!-- Foreach all the Patient via eloquent relation to get all the staff -->
                        <option selected>Pilih Pasien</option>
                        <option value="US">Pasien A</option>
                        <option value="CA">Pasien B</option>
                        <option value="FR">Pasien C</option>
                        <option value="DE">Pasien D</option>
                    </select>
                </div>

                <!-- Doctor -->
                <div class="mb-6">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter PIC</label>
                    <select id="doctor" name="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <!-- Foreach the doctor table via eloquent relation to get all the doctors -->
                        <option selected>Pilih Dokter</option>
                        <option value="US">Dokter A</option>
                        <option value="CA">Dokter B</option>
                        <option value="FR">Dokter C</option>
                        <option value="DE">Dokter D</option>
                    </select>
                </div>

                <!-- Status -->
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Pilih Status</option>
                        <option value="1">Waiting for Approval</option>
                        <option value="2">On Progress</option>
                        <option value="3">Done</option>
                    </select>
                </div>

                <div class="w-full flex flex-col sm:flex-row gap-2">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-1/2 px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit
                    </button>

                    <Link :href="route('antrian')" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-1/2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Cancel
                    </Link>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
