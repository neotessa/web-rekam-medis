<script setup>
import { defineProps } from 'vue';

defineProps({
    links: {
        type: Array,
        required: true,
    },
    total: {
        type: Number,
        required: true,
    },
});
</script>

<template>
    <nav
        class="flex items-center flex-column flex-wrap md:flex-row justify-between p-5"
        aria-label="Table navigation"
    >
        <span
        class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto"
        >Total Data :
        <span class="font-semibold text-gray-900 dark:text-white">{{ total }}</span>
        </span>

        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
        <li v-if="links.length">
            <a
            v-if="links[0].url"
            :href="links[0].url"
            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >Previous</a>
            <span
            v-else
            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            >Previous</span>
        </li>
        <li v-for="(link, index) in links.slice(1, -1)" :key="index">
            <a
            v-if="link.url"
            :href="link.url"
            :class="[
                'flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white',
                link.active ? 'text-blue-600 bg-primary-200 hover:bg-blue-100 hover:text-blue-700 dark:bg-gray-700 dark:text-white' : ''
            ]"
            v-html="link.label"
            ></a>
            <span
            v-else
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            v-html="link.label"
            ></span>
        </li>
        <li v-if="links.length">
            <a
            v-if="links[links.length - 1].url"
            :href="links[links.length - 1].url"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >Next</a>
            <span
            v-else
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            >Next</span>
        </li>
        </ul>
    </nav>
</template>
