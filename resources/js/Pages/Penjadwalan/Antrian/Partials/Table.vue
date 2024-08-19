<script setup>
import Button from "@/Components/Button.vue";
import Pagination from "@/Components/Pagination.vue";
import { Link } from "@inertiajs/vue3";

// Pass the bookings data from the backend as object
defineProps({
    bookings: Object,
});
</script>

<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table
            class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            No
                            <a href="#">
                                <svg
                                    width="14"
                                    height="8"
                                    viewBox="0 0 14 8"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12.0007 0.108587L13.0537 1.15928L7.21196 6.77688C7.11835 6.86744 7.00737 6.93897 6.88539 6.98736C6.76342 7.03576 6.63286 7.06005 6.50124 7.05886C6.36961 7.05766 6.23952 7.03099 6.11844 6.98039C5.99737 6.92978 5.8877 6.85624 5.79575 6.764L0.0541962 1.04105L1.12606 0.0106587L6.51498 5.38205L12.0007 0.108587Z"
                                        fill="#000000"
                                    />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Tanggal Booking
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">
                            Klien & Pasien
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">Servis</div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">Dokter</div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center gap-2">Status</div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex justify-center items-center gap-2">
                            Aksi
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(booking, index) in bookings.data"
                    :key="booking.id"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                >
                    <th
                        scope="row"
                        class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ index + 1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{ new Date(booking.booking_date).toLocaleString() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ booking.client.name }}, <br />
                        {{ booking.patient.name }} ({{
                            booking.patient.species
                        }}, {{ booking.patient.race }})
                    </td>
                    <td class="px-6 py-4">{{ booking.service_name }}</td>
                    <td class="px-6 py-4">{{ booking.user.name }}</td>
                    <td class="px-6 py-4">
                        <span v-if="booking.status === 1"
                            >Waiting for Approval</span
                        >
                        <span v-else-if="booking.status === 2"
                            >On Progress</span
                        >
                        <span v-else-if="booking.status === 3">Done</span>
                    </td>
                    <td class="px-6 py-4 flex">
                        <Link
                            :href="route('bookings.edit', booking.id)"
                            class="mr-2"
                        >
                            <Button
                                :background="'bg-lime-500 dark:bg-lime-500 text-white'"
                                :hover="'hover:bg-lime-600 dark:hover:bg-lime-600'"
                                :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-300'"
                            >
                                Approve
                            </Button>
                        </Link>
                        <Link
                            :href="route('bookings.edit', booking.id)"
                            class="mr-2"
                        >
                            <Button
                                :background="'bg-lime-500 dark:bg-lime-500 text-white'"
                                :hover="'hover:bg-lime-600 dark:hover:bg-lime-600'"
                                :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-300'"
                            >
                                Edit
                            </Button>
                        </Link>
                        <Link
                            :href="route('bookings.destroy', booking.id)"
                            method="delete"
                            as="button"
                            type="button"
                        >
                            <Button
                                :background="'bg-red-500 dark:bg-red-500'"
                                :hover="'hover:bg-red-600 dark:hover:bg-red-600'"
                                :focus="'focus:ring-4 focus:ring-red-300 dark:focus:ring-red-300'"
                            >
                                <img
                                    src="/images/Trash.svg"
                                    alt="Trash Logo"
                                    class="w-5 inline align-middle"
                                />
                            </Button>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <Pagination :links="bookings.links" />
    </div>
</template>
