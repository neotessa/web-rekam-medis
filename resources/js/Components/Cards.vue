<template>
    <div
        class="flex h-32 w-32 md:h-40 md:w-40 flex-col rounded-md overflow-hidden border-l-4 border-l-red-600 bg-red-400 p-2"
    >
        <p class="text-sm md:text-base font-semibold text-center underline">
            {{ time }}
        </p>
        <p class="text-base md:text-base font-bold text-center italic">
            {{ service }}
        </p>
        <p
            class="text-sm md:text-base font-semibold truncate text-ellipsis"
            :title="patient"
        >
            {{ patient }}
        </p>
        <p
            class="text-xs md:text-sm font-medium truncate text-ellipsis"
            :title="client"
        >
            {{ client }}
        </p>
        <p
            class="text-xs md:text-sm font-medium truncate text-ellipsis"
            :title="doctor"
        >
            {{ doctor }}
        </p>
        <p class="text-xs md:text-sm font-medium">{{ status }}</p>
    </div>
</template>

<script>
export default {
    props: {
        service: {
            type: String,
            default: "{{ Service }}",
        },
        time: {
            type: String,
            default: "{{ Time }}",
        },
        patient: {
            type: String,
            default: "{{ Patient }}",
        },
        client: {
            type: String,
            default: "{{ Client }}",
        },
        doctor: {
            type: String,
            default: "{{ Doctor }}",
        },
        status: {
            type: String,
            default: "{{ Status }}",
        },
    },
};
</script>
