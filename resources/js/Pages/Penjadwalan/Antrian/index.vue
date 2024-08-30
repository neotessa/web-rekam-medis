<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Header from "./Partials/Header.vue";
import SearchBar from "./Partials/SearchBar.vue";
import Table from "./Partials/Table.vue";

/**
 * Pass the reservations prop to index
 */
defineProps({
    reservations: Object,
})
</script>

<template>
    <AuthenticatedLayout>
        <div class=" bg-white border rounded-md">
            <div class="flex p-5 flex-col lg:flex-row items-start md:justify-between justify-center gap-5 mb-5">
                <Header />
                <SearchBar />
            </div>
            <Table :reservations="reservations" />
        </div>
    </AuthenticatedLayout>
</template>
