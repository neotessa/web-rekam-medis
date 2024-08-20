<template>
    <div
        class="flex h-40 w-full flex-col rounded-md border-l-4 border-l-red-600 bg-red-400 p-2"
    >
        <p class="text-md font-semibold text-center underline">{{ time }}</p>
        <p class="text-lg font-bold text-center italic">{{ service }}</p>
        <p class="text-base font-semibold">{{ patient }}</p>
        <p class="text-sm font-medium">{{ client }}</p>
        <p class="text-sm font-medium">{{ doctor }}</p>
        <p class="text-sm font-medium">{{ status }}</p>
    </div>
</template>

<script>
export default {
    props: {
        service: {
            type: String,
            default: "Service Name",
        },
        time: {
            type: String,
            default: "Time",
        },
        patient: {
            type: String,
            default: "Patient Name",
        },
        client: {
            type: String,
            default: "Client Name",
        },
        doctor: {
            type: String,
            default: "Doctor Name",
        },
        status: {
            type: String,
            default: "Status",
        },
    },
};
</script>
