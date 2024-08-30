<script setup>
import Button from '@/Components/Button.vue';
import Pagination from '@/Components/Pagination.vue';
import { Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

/**
 *  Pass the reservations data from the backend
 */
defineProps({
    reservations: Object,
});

/**
 * Make a flash message after certain activites
 */
const page = usePage();
const flashMessage = page.props.flash.message;

/**
 * Setup the close message logic
 */
const showMessage = ref(flashMessage !== null);

function closeMessage() {
    showMessage.value = false;
}

/**
 * Add a timeout to close the message after 2 second
 */

if (flashMessage !== null) {
    setTimeout(closeMessage, 3500);
}
</script>

<template>
    <!-- Display the flash message if it exists -->
    <div v-if="showMessage" class="mb-4 mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sukses! </strong>
        <span class="block sm:inline">{{ flashMessage }}</span>
        <button type="button" class="absolute top-0 right-0 p-2 text-gray-400 hover:text-gray-900" @click="closeMessage">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2">
        <table class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Id
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Tanggal Reservasi
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Owner / Klien, Pasien
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Servis
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Dokter
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Nurse
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Status
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Dibuat Oleh
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex justify-center items-center gap-2">
                            Aksi
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(reservation) in reservations.data" :key="reservation.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ reservation.id }}
                    </th>
                    <td class="px-6 py-4">{{ new Date(reservation.reservation_date).toLocaleString() }}</td> <!-- Updated field name -->
                    <td class="px-6 py-4">{{ reservation.client.name }}, <br> {{ reservation.patient.name }} ({{ reservation.patient.species }}, {{ reservation.patient.race }})</td>
                    <td class="px-6 py-4">
                        <span v-if="reservation.service === 1">Appointment</span>
                        <span v-if="reservation.service === 2">Grooming</span>
                        <span v-if="reservation.service === 3">Rawat Inap</span>
                        <span v-if="reservation.service === 4">Rawat Jalan</span>
                    </td>
                    <td class="px-6 py-4">{{ reservation.doctor.name }}</td>
                    <td class="px-6 py-4">{{ reservation.nurse.name }}</td>
                    <td class="px-6 py-4">
                        <span v-if="reservation.status === 1">Waiting for Approval</span>
                        <span v-else-if="reservation.status === 2">On Progress</span>
                        <span v-else-if="reservation.status === 3">Done</span>
                    </td>
                    <td class="px-6 py-4">{{ reservation.created_by.name }}</td>
                    <td class="px-6 py-4 flex">
                        <Link :href="route('antrian.update', reservation.id)" class="mr-2 sm:w-full">
                            <Button :background="'bg-primary-500 dark:bg-primary-500 text-white'" :hover="'hover:bg-primary-600 dark:hover:bg-primary-600'" :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-300'">
                                Edit
                            </Button>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <Pagination :links="reservations.links" :total="reservations.total" />
    </div>
</template>
