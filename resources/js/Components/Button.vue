<template>
    <button
        :class="[
            'w-full flex items-center justify-center text-center font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 focus:outline-none',
            background,
            hover,
            focus,
        ]"
        @click="handleClick"
    >
        <slot />
    </button>
</template>

<script setup>
const props = defineProps({
    background: {
        type: String,
        default: 'bg-primary-500 dark:bg-blue-600',
    },
    hover: {
        type: String,
        default: 'hover:bg-primary-600 dark:hover:bg-blue-700',
    },
    focus: {
        type: String,
        default: 'focus:ring-4 focus:ring-primary-300 dark:focus:ring-blue-800',
    },
});

const emit = defineEmits(['click']);
const handleClick = () => emit('click');
</script>
