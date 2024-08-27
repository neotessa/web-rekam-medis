<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Tabs from "@/Components/Tabs.vue";
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
        <Tabs page="terjadwal"></Tabs>
        <div class="p-5 bg-white border rounded-md">
            <div class="flex flex-col lg:flex-row items-start md:justify-between justify-center gap-5 mb-5" >
                <Header />
                <SearchBar />
            </div>
        </div>
        <Table :reservations="reservations" />
    </AuthenticatedLayout>
</template>
