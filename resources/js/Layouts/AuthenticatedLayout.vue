<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-primary-600 dark:bg-gray-800">
        <a href="https://flowbite.com/" class="flex items-center w-full h-24 justify-center mb-5">
            <img src="/images/logo.png" class="w-40 h-24 " alt="Logo" />
        </a>
        <ul class="space-y-2 font-medium ">
            <!-- dashboard -->
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                    <img src="/images/database.svg" alt="Logo" />
                    <span class="ms-3 text-secondary-100    ">Dashboard</span>
                </a>
            </li>
            <!-- Penjadwalan -->
            <li>
            <button type="button" class="group flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-primary-700 dark:text-white dark:hover:bg-gray-700" aria-controls="penjadwalan"  data-collapse-toggle="penjadwalan">
                  <img src="/images/calender.svg" alt="Logo" />
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-secondary-100">Penjadwalan</span>
                  <img src="/images/arrow-y.svg" class="group-hover:rotate-0 active:rotate-0 group-active:rotate-0 rotate-180" alt="Logo" />
            </button> 
            <ul id="penjadwalan" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                            <img src="/images/calender-2.svg" alt="Logo" />
                            <span class="ms-3 text-secondary-100">Kalender</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                            <img src="/images/antrian.svg" alt="Logo" />
                            <span class="ms-3 text-secondary-100">Antrian</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Rekam Medis -->
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                    <img src="/images/medical-record.svg" alt="Logo" />
                    <span class="ms-3 text-secondary-100">Rekam Medis</span>
                </a>
            </li>
            <!-- Penjadwalan -->
            <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-primary-700 dark:text-white dark:hover:bg-gray-700" aria-controls="master-data" data-collapse-toggle="master-data">
                  <img src="/images/database.svg" alt="Logo" />
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-secondary-100">Master Data</span>
                  <img src="/images/arrow-y.svg" alt="Logo" />
            </button>
            <ul id="master-data" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                            <img src="/images/user.svg" alt="Logo" />
                            <span class="ms-3 text-secondary-100">Daftar User</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                            <img src="/images/owner.svg" alt="Logo" />
                            <span class="ms-3 text-secondary-100">Daftar Client</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-10 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                            <img src="/images/box.svg" alt="Logo" />
                            <span class="ms-3 text-secondary-100">Daftar Item</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    </aside>

    <div class="sm:ml-64">
        <!-- navbar -->
        <div class="bg-primary-500 p-3 text-secondary-100 flex items-center justify-between">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <h1> nama halaman </h1>
            <!-- profile -->
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="flex gap-2 text-end items-center">
                    <div class="flex flex-col">
                        <h1 class="font-bold">{{ $page.props.auth.user.name }}</h1>
                        <p>{{ $page.props.auth.user.email }}</p>
                    </div>
                    <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="">
                        </button>
                    </div>
                </div>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-secondary-100">Bonnie Green</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-secondary-100">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-secondary-100">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-secondary-100">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-secondary-100">Sign out</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- main page  -->
        <main class="bg-secondary-200">
            <slot />
        </main>
    </div>



    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ms-2 -me-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-primary-700 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

template    
