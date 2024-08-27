<script setup>
import { ref, watch } from 'vue';
import { useForm } from '@inertiajs/vue3';

// Create a form instance to manage the search state
const form = useForm({
    search: '',
});

// A ref to hold the timeout ID for debouncing
const debounceTimeout = ref(null);

// Function to handle search submission
function fetchSearchResults() {
    form.get(route('antrian'), {
        preserveState: true, // Preserve state to avoid full page reload
        preserveScroll: true, // Maintain the scroll position
        only: ['reservations'] // Only fetch the reservations data
    });
}

// Watch for changes in the search field and fetch results accordingly
watch(() => form.search, (newValue) => {
    // Clear the previous timeout
    if (debounceTimeout.value) {
        clearTimeout(debounceTimeout.value);
    }

    // Set a new timeout to delay the search request
    debounceTimeout.value = setTimeout(() => {
        fetchSearchResults();
    }, 300); // 300ms debounce time
});
</script>

<template>
    <div class="lg:w-fit w-full">
        <div>
            <!-- Search -->
            <form
                @submit.prevent="fetchSearchResults"
                class="min-w-full w-full flex items-center lg:justify-between sm:justify-end justify-between gap-5"
            >
                <label
                    for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
                    >Search</label
                >
                <div class="relative">
                    <div
                        class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3"
                    >
                        <svg
                            class="w-4 h-4 text-gray-500 dark:text-gray-400"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 20 20"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                            />
                        </svg>
                    </div>
                    <input
                        v-model="form.search"
                        type="search"
                        id="default-search"
                        class="block w-64 p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search"
                    />
                </div>
                <div class="relative">
                    <!-- filter // change this to be similar to search -->
                    <button
                        id="dropdownFilterButton"
                        data-dropdown-toggle="dropdownFilter"
                        class="p-2 inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button"
                    >
                        <img
                            src="/images/filter.svg"
                            class="w-5"
                            alt=""
                        />
                    </button>
                    <!-- Dropdown menu filter -->
                    <div
                        id="dropdownFilter"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                    >
                        <ul
                            class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownFilterButton"
                        >
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Klien</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Servis</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Dokter</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Status</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
