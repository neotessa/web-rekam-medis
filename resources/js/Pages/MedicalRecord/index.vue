<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const currentPage = computed(() => usePage().props.currentPage);
</script>

<template>
    <AuthenticatedLayout>
        ini page rekam medis pasien
        <h1>{{  currentPage }}</h1>
    </AuthenticatedLayout>
</template>
