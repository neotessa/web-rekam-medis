<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const titlePage = computed(() => usePage().props.titlePage);
</script>

<template>
    <AuthenticatedLayout>
        ini page rekam medis pasien
        <h1>{{  titlePage }}</h1>
    </AuthenticatedLayout>
</template>
