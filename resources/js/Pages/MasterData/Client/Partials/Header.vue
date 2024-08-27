<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="flex justify-between lg:w-96 w-full">
        <Link :href="route('clients.create')"
            class="w-full flex items-center justify-center text-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >Tambah Data</Link
        >
        <a
            class="w-full flex items-center justify-center text-center text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >Export</a
        >
        <a
            class="w-full flex items-center justify-center text-center text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >Import</a
        >
    </div>
</template>
