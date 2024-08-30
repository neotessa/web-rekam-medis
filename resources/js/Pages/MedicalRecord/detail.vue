<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const currentPage = computed(() => usePage().props.currentPage);
</script>

<template>
    <AuthenticatedLayout>
        <div>
            <!-- Patients Profile Section -->
            <div class="flex justify-between bg-primary-500 px-3 py-3 rounded">
                <p class="text-white font-semibold text-lg">Profil Pasien</p>
                <p class="text-white font-semibold text-lg">1Hewan2024</p>
            </div>
            <div class="bg-white my-3 px-4 py-4 rounded">
                <div class="flex md:flex-row flex-col">
                <div class=" md:w-56 w-full rounded border-none">
                    <img
                        src="/images/cat.jpg"
                        alt="Extra large Profile"
                        class="rounded"
                    />
                </div>
                <div class="flex flex-col gap-3 items-start text-xs sm:text-base  md:mx-5">
                    <div
                        class="bg-red-600 p-2 items-center mt-3 rounded-lg w-fit h-10 flex  gap-1 text-white font-bold"
                        title="Aggressive"
                    >
                        <img
                            src="/images/paw-danger.svg"
                            alt="Trash Logo"
                            class="w-5 inline align-middle"
                        />
                        <p>Aggressive</p>
                    </div>
                    <table class="border-spacing-4 p-0" style="border-collapse: separate; width: 100%;">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>"Nama Kucing"</td>
                    </tr>
                    <tr>
                        <td>Spesies</td>
                        <td>:</td>
                        <td>"Spesiesnya"</td>
                    </tr>
                    <tr>
                        <td>Ras</td>
                        <td>:</td>
                        <td>"Ras"</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>"gender"</td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>:</td>
                        <td>"warna"</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>"umur"</td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>:</td>
                        <td>"berat badan"</td>
                    </tr>
                    <tr>
                        <td>Perilaku</td>
                        <td>:</td>
                        <td>"perilaku"</td>
                    </tr>
                    <tr>
                        <td>Steril</td>
                        <td>:</td>
                        <td>"steril"</td>
                    </tr>
                    <tr>
                        <td>Riwayat Kesehatan</td>
                        <td>:</td>
                        <td>"riwayat kesehatan"</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding-top: 20px;">
                        <h2 style="font-size: 1.5em; font-weight: bold;">Owner</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>"nama"</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td>"no hp"</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>"johndoe@email.com"</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>"jakarta barat"</td>
                    </tr>
                    </table>
                </div>
            </div>
            <div class="flex justify-end mt-3">
                    <button
                        type="button"
                        class="text-white w-fit flex gap-1 items-center bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm p-2 me-2 mb-2 dark:bg-amber-400 dark:hover:bg-amber-500 focus:outline-none dark:focus:ring-amber-300"
                    >
                        <img
                            src="/images/Edit.svg"
                            alt="Trash Logo"
                            class="w-5 inline align-middle"
                        />
                        Edit
                    </button>
            </div>
            </div>
            <!-- histori vaksin -->
            <div class="flex justify-between bg-primary-500 px-3 py-3 rounded">
                <p class="text-white font-semibold text-lg">
                    Histori Vaksin
                </p>
            </div>
            <div class="bg-white my-3 px-4 py-4 rounded">
            <!-- table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table
                        class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        No
                                        <a href="#">
                                            <svg
                                                width="14"
                                                height="8"
                                                viewBox="0 0 14 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12.0007 0.108587L13.0537 1.15928L7.21196 6.77688C7.11835 6.86744 7.00737 6.93897 6.88539 6.98736C6.76342 7.03576 6.63286 7.06005 6.50124 7.05886C6.36961 7.05766 6.23952 7.03099 6.11844 6.98039C5.99737 6.92978 5.8877 6.85624 5.79575 6.764L0.0541962 1.04105L1.12606 0.0106587L6.51498 5.38205L12.0007 0.108587Z"
                                                    fill="#000000"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Tanggal
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Vaksin
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    1
                                </th>
                                <td class="px-6 py-4">1-augustus-2024</td>
                                <td class="px-6 py-4">Rabies</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Patients Visits Section -->
            <div class="flex justify-between bg-primary-500 px-3 py-3 rounded">
                <p class="text-white font-semibold text-lg">
                    Kunjungan
                </p>
            </div>
            <div class="bg-white my-3 px-4 py-4 rounded">
                <div
                    class="flex flex-col lg:flex-row items-start md:justify-end mb-5"
                >
                    <div class="lg:w-fit w-full">
                        <div>
                            <form
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
                                        type="search"
                                        id="default-search"
                                        class="block w-64 p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search"
                                        required
                                    />
                                </div>
                                <div class="relative">
                                    <!-- filter -->
                                    <button
                                        id="dropdownFilterButton"
                                        data-dropdown-toggle="dropdownFilter"
                                        class="p-2 inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button"
                                    >
                                        <img
                                            src="images/filter.svg"
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
                                                    >Dashboard</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    >Settings</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    >Earnings</a
                                                >
                                            </li>
                                        </ul>
                                        <div class="py-2">
                                            <a
                                                href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                                >Separated link</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table
                        class="min-w-max w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        No
                                        <a href="#">
                                            <svg
                                                width="14"
                                                height="8"
                                                viewBox="0 0 14 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12.0007 0.108587L13.0537 1.15928L7.21196 6.77688C7.11835 6.86744 7.00737 6.93897 6.88539 6.98736C6.76342 7.03576 6.63286 7.06005 6.50124 7.05886C6.36961 7.05766 6.23952 7.03099 6.11844 6.98039C5.99737 6.92978 5.8877 6.85624 5.79575 6.764L0.0541962 1.04105L1.12606 0.0106587L6.51498 5.38205L12.0007 0.108587Z"
                                                    fill="#000000"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        ID Hewan
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Nama
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Spesies
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Ras
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center gap-2">
                                        Jenis Kelamin
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div
                                        class="flex justify-center items-center gap-2"
                                    >
                                        Aksi
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    1
                                </th>
                                <td class="px-6 py-4">1Hewan2024</td>
                                <td class="px-6 py-4">Supriyadi</td>
                                <td class="px-6 py-4">Kucing</td>
                                <td class="px-6 py-4">Domestik</td>
                                <td class="px-6 py-4">Male</td>
                                <td class="px-6 py-4">
                                    <button
                                        type="button"
                                        class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm w-full py-2.5 me-2 mb-2 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none dark:focus:ring-primary-300"
                                    >
                                        Catatan
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- pagination -->
                    <nav
                        class="flex items-center flex-column flex-wrap md:flex-row justify-between p-5"
                        aria-label="Table navigation"
                    >
                        <span
                            class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto"
                            >Total Data :
                            <span
                                class="font-semibold text-gray-900 dark:text-white"
                                >4</span
                            ></span
                        >
                        <ul
                            class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8"
                        >
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >Previous</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >1</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >2</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                                    >3</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >4</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >5</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >Next</a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Medical Records Sections -->
            <div class="flex justify-between bg-primary-500 px-3 py-3 rounded">
                <p class="text-white font-semibold text-lg">Rekam Medis</p>
            </div>
            <div
                class="bg-white my-3 px-4 py-4 rounded flex flex-wrap gap-3 justify-center"
            >
                <div class="flex gap-3">
                    <div class="relative max-w-sm">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                        >
                            <svg
                                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                />
                            </svg>
                        </div>
                        <input
                            datepicker
                            id="default-datepicker"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date"
                        />
                    </div>

                    <div class="relative max-w-sm">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                        >
                            <svg
                                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                />
                            </svg>
                        </div>
                        <input
                            datepicker
                            id="default-datepicker"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date"
                        />
                    </div>
                </div>
                <button
                    type="button"
                    class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm w-full md:w-44 py-2.5 me-2 mb-2 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none dark:focus:ring-primary-300"
                >
                    Bandingkan Data
                </button>
            </div>
            <div class="flex gap-2 text-xs md:text-base">
                <div class="grid grid-rows-11 gap-2 bg-white p-2 rounded w-1/3">
                    <p class="px-1 font-bold text-center">Data</p>
                    <p class="font-bold px-1">Temperatur</p>
                    <p class="font-bold bg-gray-100 px-1">Berat badan</p>
                    <p class="font-bold px-1">Gula Darah</p>
                    <p class="font-bold bg-gray-100 px-1">Tekanan Darah</p>
                    <p class="font-bold px-1">Detak Jantung</p>
                    <p class="font-bold bg-gray-100 px-1">Saturasi</p>
                    <p class="font-bold px-1">Pernapasan</p>
                    <p class="font-bold bg-gray-100 px-1">Penanganan Khusus</p>
                    <p class="font-bold px-1">Medikasi</p>
                    <p class="font-bold bg-gray-100 px-1">Catatan</p>
                </div>
                <div
                    class="grid grid-rows-11 gap-2 bg-white p-2 rounded w-full"
                >
                    <p class="px-1 font-bold text-center">17 Agustus 2024</p>
                    <p class="px-1">100 C</p>
                    <p class="bg-gray-100 px-1">90 gram</p>
                    <p class="px-1">123</p>
                    <p class="bg-gray-100 px-1">456</p>
                    <p class="px-1">789</p>
                    <p class="bg-gray-100 px-1">901</p>
                    <p class="px-1">234</p>
                    <p class="bg-gray-100 px-1">-</p>
                    <p class="px-1">-</p>
                    <p class="bg-gray-100 px-1">Lorem ipsum dol</p>
                </div>
                <div
                    class="grid grid-rows-11 gap-2 bg-white p-2 rounded w-full"
                >
                    <p class="px-1 font-bold text-center">19 Agustus 2024</p>
                    <p class="px-1">100 C</p>
                    <p class="bg-gray-100 px-1">90 gram</p>
                    <p class="px-1">123</p>
                    <p class="bg-gray-100 px-1">456</p>
                    <p class="px-1">789</p>
                    <p class="bg-gray-100 px-1">901</p>
                    <p class="px-1">234</p>
                    <p class="bg-gray-100 px-1">-</p>
                    <p class="px-1">-</p>
                    <p class="bg-gray-100 px-1">Lorem ipsum dol</p>
                </div>
                <div class="grid grid-rows-11 gap-2 bg-white p-2 rounded w-1/4">
                    <p class="px-1 font-bold text-center">Beda</p>
                    <p class="px-1">100 C</p>
                    <p class="bg-gray-100 px-1">90 gram</p>
                    <p class="px-1">123</p>
                    <p class="bg-gray-100 px-1">456</p>
                    <p class="px-1">789</p>
                    <p class="bg-gray-100 px-1">901</p>
                    <p class="px-1">234</p>
                    <p class="bg-gray-100 px-1">-</p>
                    <p class="px-1">-</p>
                    <p class="bg-gray-100 px-1">-</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
