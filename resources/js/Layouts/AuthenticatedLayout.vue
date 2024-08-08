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
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-primary-600 dark:bg-gray-800">
        <a href="https://flowbite.com/" class="flex items-center w-full h-24 justify-center mb-5">
            <img src="/images/logo.png" class="w-40 h-24 " alt="Logo" />
        </a>
        <ul class="space-y-2 font-medium ">
            <!-- dashboard -->
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-secondary-100 hover:bg-primary-700 dark:hover:bg-gray-700 group">
                    <img src="/images/dashboard.svg" alt="Logo" />
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
                            <img src="/images/client.svg" alt="Logo" />
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

    <div class="md:ml-64">
        <!-- navbar -->
        <div class="bg-primary-500 p-3 text-secondary-100 flex items-center justify-between">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 ms-3 text-sm text-white rounded-lg sm:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <h1> nama halaman </h1>
            <!-- profile -->
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="flex gap-5 text-end items-center">
                    <!-- notif -->
                    <div class="flex flex-col">
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                        <img src="images/bell.svg" alt="">

                        <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900"></div>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                        <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                            Notifications
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-gray-700">
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                    <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                            </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" alt="Joseph image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"/>
                                </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                            </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" alt="Bonnie image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                                </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and <span class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more stories.</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                            </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" alt="Leslie image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                                </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                            </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" alt="Robert image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                                </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                            </a>
                        </div>
                        <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                            <div class="inline-flex items-center ">
                            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                            </svg>
                                View all
                            </div>
                        </a>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                            <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-secondary-100">Bonnie Green</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                                <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main page  -->
        <main class="bg-secondary-200 lg:p-5 p-2 h-screen">
            <slot />
        </main>
    </div>
</template> 
