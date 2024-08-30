<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ScheduleCard from "@/Components/Cards.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const titlePage = computed(() => usePage().props.titlePage);
</script>

<template>
    <AuthenticatedLayout>


            <!-- <div class="relative max-w-sm">
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
            </div> -->
        <div class="flex flex-col w-full h-screen overflow-y-auto items-center py-3 bg-white ">
            <!-- <div class="px-3 w-full flex flex-col gap-2 items-center">
                <input type="month" class="border-none active:focus:border-none">
                <div>Agustus 2024</div>
                <div class="flex w-ful gap-5">
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">1</div>
                        <div class="text-md">Senin</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">2</div>
                        <div class="text-md">Selasa</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-600 text-white p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">3</div>
                        <div class="text-md">Rabu</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">4</div>
                        <div class="text-md">Kamis</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">5</div>
                        <div class="text-md">Jumat</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">6</div>
                        <div class="text-md">Sabtu</div>
                    </button>
                    <button class="flex flex-col items-center justify-center bg-primary-200 text-black p-2 rounded hover:bg-primary-400 ">
                        <div class="text-xl font-bold">7</div>
                        <div class="text-md">Minggu</div>
                    </button>
                </div>
            </div> -->

            <div class="flex gap-3">
                <div class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2">
                    <div class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md">
                        <h1 class="font-bold">Senin | 12</h1>
                    </div>
                    <ScheduleCard
                        time="08:30"
                        service="Appointment"
                        patient="C. Chloe"
                        client="Maulana Irfan"
                        doctor="Dr. Ahmad"
                    ></ScheduleCard>
                    <ScheduleCard
                        time="08:30"
                        service="Appointment"
                        patient="C. Chloe"
                        client="Maulana Irfan"
                        doctor="Dr. Ahmad"
                    ></ScheduleCard>
                </div>
                <div
                    class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2"
                >
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Selasa | 13</h1>
                    </div>
                    <ScheduleCard></ScheduleCard>
                </div>
                <div
                    class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2"
                >
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Rabu | 14</h1>
                    </div>
                    <ScheduleCard
                        time="08:30"
                        service="Grooming"
                        patient="D. Doge"
                        client="Irfan Maulana"
                        doctor="Dr. Ahmad"
                    ></ScheduleCard>
                </div>
                <div
                    class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2"
                >
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Kamis | 15</h1>
                    </div>
                    <ScheduleCard
                        time="08:30"
                        service="Appointment"
                        patient="C. Chloe"
                        client="Maulana Irfan"
                        doctor="Dr. Ahmad"
                    ></ScheduleCard>
                </div>
                <div
                    class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2"
                >
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Jum'at | 16</h1>
                    </div>
                    <ScheduleCard></ScheduleCard>
                </div>
                <div
                    class="flex flex-col items-center gap-3 min-w-[140px] border-r-2 px-2"
                >
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Sabtu | 17</h1>
                    </div>
                    <ScheduleCard></ScheduleCard>
                </div>
                <div class="flex flex-col items-center gap-3 min-w-[140px]">
                    <div
                        class="w-10/12 bg-primary-500 rounded py-1 text-white text-center shadow-md"
                    >
                        <h1 class="font-bold">Minggu | 18</h1>
                    </div>
                    <ScheduleCard></ScheduleCard>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
