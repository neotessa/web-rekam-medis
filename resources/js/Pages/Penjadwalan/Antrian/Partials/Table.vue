<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
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
                        Klien
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
                        Status
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div
                        class="flex justify-center items-center gap-2"
                    >
                        Aksi
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">17 Agustus 2004: 17.00</td>
                <td class="px-6 py-4">Supriyadi <br> Meyong (Kucing, Domestik)</td>
                <td class="px-6 py-4">Check Up</td>
                <td class="px-6 py-4">Ariel Pancong</td>
                <td class="px-6 py-4">On Progress</td>
                <td class="px-6 py-4 flex">
                    <Button :background="'bg-lime-500 dark:bg-lime-500 text-white'" :hover="'hover:bg-lime-600 dark:hover:bg-lime-600'" :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-300'">
                        Memulai
                    </Button>
                    <Button :background="'bg-red-500 dark:bg-red-500'" :hover="'hover:bg-red-600 dark:hover:bg-red-600'" :focus="'focus:ring-4 focus:ring-red-300 dark:focus:ring-red-300'">
                        <img src="/images/Trash.svg" alt="Trash Logo" class="w-5 inline align-middle" />
                    </Button>
                </td>
            </tr>
        </tbody>
    </table>
    <Pagination/>
</div>
</template>

<script setup>
import Button from '@/Components/Button.vue';
import Pagination from '@/Components/Pagination.vue';
</script>

<!--
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
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
                    Klien
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
                    Status
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div
                    class="flex justify-center items-center gap-2"
                >
                    Aksi
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr
            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
        >
            <th
                scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
            >
                1
            </th>
            <td class="px-6 py-4">1Hewan2024</td>
            <td class="px-6 py-4">Supriyadi</td>
            <td class="px-6 py-4">Kucing</td>
            <td class="px-6 py-4">Domestik</td>
            <td class="px-6 py-4">Male</td>
            <td class="px-6 py-4">
                <button
                    type="button"
                    class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none dark:focus:ring-primary-300"
                >
                    Detail
                </button>
                <button
                    type="button"
                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-300"
                >
                    <img
                        src="/images/Trash.svg"
                        alt="Trash Logo"
                        class="w-5 inline align-middle"
                    />
                </button>
            </td>
        </tr>
    </tbody>
</table>

                -->
