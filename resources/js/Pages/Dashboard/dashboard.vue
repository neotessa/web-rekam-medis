<script setup>
import { ref, onMounted } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PieChart from './Partials/PieChart.vue';
import LineChart from './Partials/LineChart.vue';

const chartRef = ref(null); // Reference to the chart container
</script>


<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="overflow-y-auto">
            <div class="flex flex-wrap sm:flex-row flex-col gap-2">
                <div class="sm:w-[33%] w- full flex-grow md:h-40 h-36 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col  items-start gap-2">
                        <div class="flex items-center gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-black" d="M14 13.0001V15.0001H0V13.0001C0 13.0001 0 9.00005 7 9.00005C14 9.00005 14 13.0001 14 13.0001ZM10.5 3.50005C10.5 2.80782 10.2947 2.13113 9.91014 1.55556C9.52556 0.979985 8.97893 0.531381 8.33939 0.266474C7.69985 0.00156766 6.99612 -0.067744 6.31718 0.0673043C5.63825 0.202353 5.01461 0.535695 4.52513 1.02518C4.03564 1.51466 3.7023 2.1383 3.56725 2.81724C3.4322 3.49617 3.50152 4.1999 3.76642 4.83944C4.03133 5.47899 4.47993 6.02561 5.0555 6.4102C5.63108 6.79478 6.30777 7.00005 7 7.00005C7.92826 7.00005 8.8185 6.6313 9.47487 5.97493C10.1313 5.31855 10.5 4.42831 10.5 3.50005ZM13.94 9.00005C14.5547 9.4758 15.0578 10.0805 15.4137 10.7716C15.7696 11.4626 15.9697 12.2233 16 13.0001V15.0001H20V13.0001C20 13.0001 20 9.37005 13.94 9.00005ZM13 5.2579e-05C12.3117 -0.00378014 11.6385 0.202008 11.07 0.590053C11.6774 1.43879 12.0041 2.45634 12.0041 3.50005C12.0041 4.54377 11.6774 5.56132 11.07 6.41005C11.6385 6.7981 12.3117 7.00389 13 7.00005C13.9283 7.00005 14.8185 6.6313 15.4749 5.97493C16.1313 5.31855 16.5 4.42831 16.5 3.50005C16.5 2.57179 16.1313 1.68156 15.4749 1.02518C14.8185 0.368802 13.9283 5.2579e-05 13 5.2579e-05Z" />
                            </svg>
                            <h1 class="text-base">Kunjungan</h1>
                        </div>
                        <p class="sm:text-3xl text-2xl font-bold">80 / hari ini</p>
                        <div class="flex justify-between md:w-80 gap-3 ">
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-red-500 rounded-full"></div>terdaftar : 40</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-yellow-400 rounded-full"></div>memulai : 30</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-green-500 rounded-full"></div>selesai : 10</div>
                        </div>
                    </div>
                </div>
                <!-- card2 -->
                <div class="sm:w-[33%] w-full flex-grow md:h-40 h-36 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-start gap-2">
                        <div class="flex items-center gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-black" d="M14 13.0001V15.0001H0V13.0001C0 13.0001 0 9.00005 7 9.00005C14 9.00005 14 13.0001 14 13.0001ZM10.5 3.50005C10.5 2.80782 10.2947 2.13113 9.91014 1.55556C9.52556 0.979985 8.97893 0.531381 8.33939 0.266474C7.69985 0.00156766 6.99612 -0.067744 6.31718 0.0673043C5.63825 0.202353 5.01461 0.535695 4.52513 1.02518C4.03564 1.51466 3.7023 2.1383 3.56725 2.81724C3.4322 3.49617 3.50152 4.1999 3.76642 4.83944C4.03133 5.47899 4.47993 6.02561 5.0555 6.4102C5.63108 6.79478 6.30777 7.00005 7 7.00005C7.92826 7.00005 8.8185 6.6313 9.47487 5.97493C10.1313 5.31855 10.5 4.42831 10.5 3.50005ZM13.94 9.00005C14.5547 9.4758 15.0578 10.0805 15.4137 10.7716C15.7696 11.4626 15.9697 12.2233 16 13.0001V15.0001H20V13.0001C20 13.0001 20 9.37005 13.94 9.00005ZM13 5.2579e-05C12.3117 -0.00378014 11.6385 0.202008 11.07 0.590053C11.6774 1.43879 12.0041 2.45634 12.0041 3.50005C12.0041 4.54377 11.6774 5.56132 11.07 6.41005C11.6385 6.7981 12.3117 7.00389 13 7.00005C13.9283 7.00005 14.8185 6.6313 15.4749 5.97493C16.1313 5.31855 16.5 4.42831 16.5 3.50005C16.5 2.57179 16.1313 1.68156 15.4749 1.02518C14.8185 0.368802 13.9283 5.2579e-05 13 5.2579e-05Z" />
                            </svg>
                            <h1 class="text-base">Rawat inap</h1>
                        </div>
                        <p class="sm:text-3xl text-2xl font-bold">80 / hari ini</p>
                        <div class="flex justify-between md:w-80 gap-3">
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-red-500 rounded-full"></div>terdaftar : 40</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-yellow-400 rounded-full"></div>memulai : 30</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-green-500 rounded-full"></div>selesai : 10</div>
                        </div>
                    </div>
                </div>
                <!-- card3 -->
                <div class="sm:w-[33%] w-full flex-grow md:h-40 h-36 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-start gap-2">
                        <div class="flex items-center gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-black" d="M14 13.0001V15.0001H0V13.0001C0 13.0001 0 9.00005 7 9.00005C14 9.00005 14 13.0001 14 13.0001ZM10.5 3.50005C10.5 2.80782 10.2947 2.13113 9.91014 1.55556C9.52556 0.979985 8.97893 0.531381 8.33939 0.266474C7.69985 0.00156766 6.99612 -0.067744 6.31718 0.0673043C5.63825 0.202353 5.01461 0.535695 4.52513 1.02518C4.03564 1.51466 3.7023 2.1383 3.56725 2.81724C3.4322 3.49617 3.50152 4.1999 3.76642 4.83944C4.03133 5.47899 4.47993 6.02561 5.0555 6.4102C5.63108 6.79478 6.30777 7.00005 7 7.00005C7.92826 7.00005 8.8185 6.6313 9.47487 5.97493C10.1313 5.31855 10.5 4.42831 10.5 3.50005ZM13.94 9.00005C14.5547 9.4758 15.0578 10.0805 15.4137 10.7716C15.7696 11.4626 15.9697 12.2233 16 13.0001V15.0001H20V13.0001C20 13.0001 20 9.37005 13.94 9.00005ZM13 5.2579e-05C12.3117 -0.00378014 11.6385 0.202008 11.07 0.590053C11.6774 1.43879 12.0041 2.45634 12.0041 3.50005C12.0041 4.54377 11.6774 5.56132 11.07 6.41005C11.6385 6.7981 12.3117 7.00389 13 7.00005C13.9283 7.00005 14.8185 6.6313 15.4749 5.97493C16.1313 5.31855 16.5 4.42831 16.5 3.50005C16.5 2.57179 16.1313 1.68156 15.4749 1.02518C14.8185 0.368802 13.9283 5.2579e-05 13 5.2579e-05Z" />
                            </svg>
                            <h1 class="text-base">Rawat jalan</h1>
                        </div>
                        <p class="sm:text-3xl text-2xl font-bold">80 / hari ini</p>
                        <div class="flex justify-between md:w-80 gap-3">
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-red-500 rounded-full"></div>terdaftar : 40</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-yellow-400 rounded-full"></div>memulai : 30</div>
                            <div class="flex items-center gap-3 text-xs"><div class="w-3 h-3 bg-green-500 rounded-full"></div>selesai : 10</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- chart -->
         <div class="flex flex-wrap w-full mt-10 justify-between gap-2">
            <LineChart />
            <PieChart />
         </div>

    </AuthenticatedLayout>
</template>

