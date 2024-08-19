<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Tabs from "@/Components/Tabs.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const titlePage = computed(() => usePage().props.titlePage);
</script>

<template>
    <AuthenticatedLayout>
        <Tabs page="rawat-jalan"></Tabs>
        <div class="p-5 bg-white border rounded-md">
            <div
                class="flex flex-col lg:flex-row items-start md:justify-between justify-center gap-5 mb-5"
            >
                <div class="flex justify-between lg:w-96 w-full">
                    <a
                        class="w-full flex items-center justify-center text-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        >Tambah Data</a
                    >
                    <a
                        class="w-full flex items-center justify-center text-center text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        >Export</a
                    >
                    <a
                        class="w-full flex items-center justify-center text-center text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs md:text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        >Import</a
                    >
                </div>
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
                                    Kode Rawat Jalan
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    Pasien
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    Tanggal Kunjungan
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    Alasan
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    Dokter
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    Status
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
                            <td class="px-6 py-4">1RawatInap24</td>
                            <td class="px-6 py-4">
                                <ul>
                                    <li class="font-semibold">C. Supriyadi</li>
                                    <li>M, British Short Hair</li>
                                </ul>
                            </td>
                            <td class="px-6 py-4">1 Agustus 2024</td>
                            <td class="px-6 py-4">Sembelit</td>
                            <td class="px-6 py-4">Dr. Irfan</td>
                            <td class="px-3 py-4">
                                <span
                                    class="bg-[#76d764] px-3 py-1 rounded-2xl text-white font-semibold"
                                >
                                    Perlu Ditindak
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button
                                    data-modal-target="detail-modal"
                                    data-modal-toggle="detail-modal"
                                    type="button"
                                    class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none dark:focus:ring-primary-300"
                                >
                                    Detail
                                </button>
                                <button
                                    type="button"
                                    class="text-white bg-amber-400 hover:bg-amber-500 focus:ring-4 focus:ring-amber-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-amber-400 dark:hover:bg-amber-500 focus:outline-none dark:focus:ring-amber-300"
                                >
                                    <img
                                        src="/images/Edit.svg"
                                        alt="Trash Logo"
                                        class="w-5 inline align-middle"
                                    />
                                </button>
                                <button
                                    type="button"
                                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-300"
                                >
                                    <img
                                        src="/images/Trash.svg"
                                        alt="Trash Logo"
                                        class="w-5 inline align-middle"
                                    />
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

        <!-- Detail modal -->
        <div
            id="detail-modal"
            tabindex="-1"
            aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div
                    class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                >
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
                    >
                        <h3
                            class="text-xl font-semibold text-gray-900 dark:text-white"
                        >
                            Detail Pasien
                        </h3>
                        <button
                            type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="detail-modal"
                        >
                            <svg
                                class="w-3 h-3"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 14 14"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <table
                            class="table-fixed border-separate border-spacing-x-3 border-spacing-y-1"
                        >
                            <tr class="">
                                <td>Kode Rawat Jalan</td>
                                <td>:</td>
                                <td>1RawatJalan24</td>
                            </tr>
                            <tr>
                                <td>Pasien</td>
                                <td>:</td>
                                <td>C. Supriyadi | Male, British Short Hair</td>
                            </tr>
                            <tr>
                                <td>Tanggal Kunjungan</td>
                                <td>:</td>
                                <td>1 Agustus 2024</td>
                            </tr>
                            <tr>
                                <td>Tanggal Komplain</td>
                                <td>:</td>
                                <td>2 Agustus 2024</td>
                            </tr>
                            <tr>
                                <td>Alasan</td>
                                <td>:</td>
                                <td>Tidak Mau Makan</td>
                            </tr>
                            <tr>
                                <td>Diagnosa</td>
                                <td>:</td>
                                <td>Sembelit</td>
                            </tr>
                            <tr>
                                <td>Penanganan</td>
                                <td>:</td>
                                <td>Diberi minum obat sembelit kucing</td>
                            </tr>
                            <tr>
                                <td>Resep</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>Perlu Ditindak</td>
                            </tr>
                            <tr>
                                <td>Dokter</td>
                                <td>:</td>
                                <td>Dr. Irfan</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600"
                    >
                        <button
                            data-modal-hide="detail-modal"
                            type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full"
                        >
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
