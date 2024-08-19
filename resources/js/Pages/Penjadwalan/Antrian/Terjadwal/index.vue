<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Tabs from "@/Components/Tabs.vue";
import Header from "../Partials/Header.vue";
import SearchBar from "../Partials/SearchBar.vue";
import Table from "../Partials/Table.vue";

defineProps({
    bookings: Object,
});
</script>

<template>
    <AuthenticatedLayout>
        <Tabs page="terjadwal"></Tabs>
        <div class="p-5 bg-white border rounded-md">
            <div
                class="flex flex-col lg:flex-row items-start md:justify-between justify-center gap-5"
            >
                <Header />
                <SearchBar />
            </div>
        </div>
        <Table :bookings="bookings" />
    </AuthenticatedLayout>
</template>
