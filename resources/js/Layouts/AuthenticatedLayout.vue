<script setup>
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { ref, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();

// Compute the current URL
const currentUrl = computed(() => page.url);

// Check if a given URL is active
const isActive = (url) => {
    if (url === "/") {
        return currentUrl.value === url;
    }
    
    return currentUrl.value.startsWith(url);
};

// Get the page title
const pageTitle = computed(() => page.props.titlePage);
const user = computed(() => page.props.auth.user);
</script>

<template>
    <aside
        id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0"
        aria-label="Sidebar"
    >
        <div
            class="h-full px-3 py-4 overflow-y-auto bg-primary-600 dark:bg-gray-800"
        >
            <a
                href="/"
                class="flex items-center w-full h-24 justify-center mb-5"
            >
                <img src="/images/logo.png" class="w-40 h-24" alt="Logo" />
            </a>
            <ul class="space-y-2 font-medium">
                <!-- dashboard -->
                <li>
                    <Link
                        :href="route('dashboard')"
                        :class="{ 'bg-primary-800': isActive('/') }"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                    >
                        <img src="/images/dashboard.svg" alt="Logo" />
                        <span class="ms-3 text-secondary-100">Dashboard</span>
                    </Link>
                </li>
                <!-- Penjadwalan -->
                <li>
                    <button
                        type="button"
                        class="group flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-primary-700 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="penjadwalan"
                        data-collapse-toggle="penjadwalan"
                    >
                        <img src="/images/calender.svg" alt="Logo" />
                        <span
                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-secondary-100"
                            >Penjadwalan</span
                        >
                        <img
                            src="/images/arrow-y.svg"
                            :class="{ 'rotate-180': isActive('/penjadwalan') }"
                            class=""
                            alt="Logo"
                        />
                    </button>
                    <ul
                        id="penjadwalan"
                        :class="{ hidden: !isActive('/penjadwalan') }"
                        class="py-2 space-y-2"
                    >
                        <li>
                            <Link
                                :href="route('kalender')"
                                :class="{
                                    'bg-primary-800': isActive(
                                        '/penjadwalan/kalender'
                                    ),
                                }"
                                class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                            >
                                <img src="/images/calender-2.svg" alt="Logo" />
                                <span class="ms-3 text-secondary-100"
                                    >Kalender</span
                                >
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('antrian')"
                                :class="{
                                    'bg-primary-800': isActive(
                                        '/penjadwalan/antrian'
                                    ),
                                }"
                                class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                            >
                                <img src="/images/antrian.svg" alt="Logo" />
                                <span class="ms-3 text-secondary-100"
                                    >Antrian</span
                                >
                            </Link>
                        </li>
                    </ul>
                </li>
                <!-- Rekam Medis -->
                <li>
                    <Link
                        :href="route('medical-record')"
                        :class="{ 'bg-primary-800': isActive('/rekam-medis') }"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                    >
                        <img src="/images/medical-record.svg" alt="Logo" />
                        <span class="ms-3 text-secondary-100"
                            >Daftar rekam-medis</span
                        >
                    </Link>
                </li>
                <!-- Penjadwalan -->
                <li>
                    <button
                        type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-primary-700 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="master-data"
                        data-collapse-toggle="master-data"
                    >
                        <img src="/images/database.svg" alt="Logo" />
                        <span
                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-secondary-100"
                            >Master Data</span
                        >
                        <img
                            src="/images/arrow-y.svg"
                            :class="{ 'rotate-180': isActive('/master-data') }"
                            class=""
                            alt="Logo"
                        />
                    </button>
                    <ul
                        id="master-data"
                        :class="{ hidden: !isActive('/master-data') }"
                        class="py-2 space-y-2"
                    >
                        <li>
                            <Link
                                :href="route('users')"
                                :class="{
                                    'bg-primary-800':
                                        isActive('/master-data/users'),
                                }"
                                class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                            >
                                <img src="/images/user.svg" alt="Logo" />
                                <span class="ms-3 text-secondary-100"
                                    >Daftar User</span
                                >
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('clients')"
                                :class="{
                                    'bg-primary-800': isActive(
                                        '/master-data/clients'
                                    ),
                                }"
                                class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                            >
                                <img src="/images/client.svg" alt="Logo" />
                                <span class="ms-3 text-secondary-100"
                                    >Daftar Client</span
                                >
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('items')"
                                :class="{
                                    'bg-primary-800':
                                        isActive('/master-data/items'),
                                }"
                                class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group"
                            >
                                <img src="/images/box.svg" alt="Logo" />
                                <span class="ms-3 text-secondary-100"
                                    >Daftar Item</span
                                >
                            </Link>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div class="lg:ml-64">
        <!-- navbar -->
        <div
            class="bg-primary-500 p-3 text-secondary-100 flex items-center justify-between"
        >
            <button
                data-drawer-target="logo-sidebar"
                data-drawer-toggle="logo-sidebar"
                aria-controls="logo-sidebar"
                type="button"
                class="inline-flex items-center p-2 ms-3 text-sm text-white rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            >
                <span class="sr-only">Open sidebar</span>
                <svg
                    class="w-6 h-6"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                    ></path>
                </svg>
            </button>
            <h1>{{ pageTitle }}</h1>
            <!-- profile -->
            <div
                class="flex gap-2 items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
            >
            <div class="flex flex-col justify-end text-end">
                <h2 class="font-bold">{{ user.name }}</h2>
                <h3 class="text-xs">{{ user.email }}</h3>
            </div>
                <div class="flex gap-5 text-end items-center">
                    <div>
                        <button
                            type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button"
                            aria-expanded="false"
                            data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom"
                        >
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/images/profile.jpeg" alt="" />
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown"
                        >
                            <ul class="px-4" aria-labelledby="user-menu-button">
                                <ResponsiveNavLink
                                    :href="route('profile.edit')"
                                >
                                    Profile
                                </ResponsiveNavLink>
                                <ResponsiveNavLink
                                    :href="route('logout')"
                                    method="post"
                                    as="button"
                                >
                                    Log Out
                                </ResponsiveNavLink>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main page  -->
        <main class="bg-secondary-200 lg:p-5 p-2 min-h-screen max-h-max">
            <slot />
        </main>
    </div>
</template>
