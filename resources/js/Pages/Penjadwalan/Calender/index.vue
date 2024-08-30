<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ScheduleCard from "@/Components/Cards.vue";
import { usePage } from "@inertiajs/vue3";
import { computed, ref, watch } from "vue";

// Title of the page
const titlePage = computed(() => usePage().props.titlePage);

// Dummy schedule data
const scheduleData = ref([
    { time: "08:30", service: "1", patient: "C. Chloe", client: "Maulana Irfan", doctor: "Dr. Ahmad" },
    { time: "09:00", service: "2", patient: "B. Bruno", client: "Adi Saputra", doctor: "Dr. Rita" },
    { time: "10:00", service: "3", patient: "D. Doge", client: "Siti Aisyah", doctor: "Dr. Rahman" },
    { time: "11:00", service: "4", patient: "E. Ellie", client: "Ahmad Faiz", doctor: "Dr. Tania" },
    { time: "12:00", service: "1", patient: "F. Felix", client: "John Doe", doctor: "Dr. Akmal" },
    { time: "13:00", service: "2", patient: "G. Ginger", client: "Jane Smith", doctor: "Dr. Maya" },
    { time: "14:00", service: "3", patient: "H. Hugo", client: "Robert King", doctor: "Dr. Farah" },
    { time: "15:00", service: "4", patient: "I. Izzy", client: "Emily Clark", doctor: "Dr. Nadiyah" },
    { time: "16:00", service: "1", patient: "J. Jack", client: "Michael Brown", doctor: "Dr. Zain" },
    { time: "17:00", service: "2", patient: "K. Kiwi", client: "Chris Evans", doctor: "Dr. Sarah" },
    { time: "08:30", service: "1", patient: "C. Chloe", client: "Maulana Irfan", doctor: "Dr. Ahmad" },
    { time: "09:00", service: "2", patient: "B. Bruno", client: "Adi Saputra", doctor: "Dr. Rita" },
    { time: "10:00", service: "3", patient: "D. Doge", client: "Siti Aisyah", doctor: "Dr. Rahman" },
    { time: "11:00", service: "4", patient: "E. Ellie", client: "Ahmad Faiz", doctor: "Dr. Tania" },
    { time: "12:00", service: "1", patient: "F. Felix", client: "John Doe", doctor: "Dr. Akmal" },
    { time: "13:00", service: "2", patient: "G. Ginger", client: "Jane Smith", doctor: "Dr. Maya" },
    { time: "14:00", service: "3", patient: "H. Hugo", client: "Robert King", doctor: "Dr. Farah" },
    { time: "15:00", service: "4", patient: "I. Izzy", client: "Emily Clark", doctor: "Dr. Nadiyah" },
    { time: "16:00", service: "1", patient: "J. Jack", client: "Michael Brown", doctor: "Dr. Zain" },
    { time: "17:00", service: "2", patient: "K. Kiwi", client: "Chris Evans", doctor: "Dr. Sarah" },
    { time: "08:30", service: "1", patient: "C. Chloe", client: "Maulana Irfan", doctor: "Dr. Ahmad" },
    { time: "09:00", service: "2", patient: "B. Bruno", client: "Adi Saputra", doctor: "Dr. Rita" },
    { time: "10:00", service: "3", patient: "D. Doge", client: "Siti Aisyah", doctor: "Dr. Rahman" },
    { time: "11:00", service: "4", patient: "E. Ellie", client: "Ahmad Faiz", doctor: "Dr. Tania" },
    { time: "12:00", service: "1", patient: "F. Felix", client: "John Doe", doctor: "Dr. Akmal" },
    { time: "13:00", service: "2", patient: "G. Ginger", client: "Jane Smith", doctor: "Dr. Maya" },
    { time: "14:00", service: "3", patient: "H. Hugo", client: "Robert King", doctor: "Dr. Farah" },
    { time: "15:00", service: "4", patient: "I. Izzy", client: "Emily Clark", doctor: "Dr. Nadiyah" },
    { time: "16:00", service: "1", patient: "J. Jack", client: "Michael Brown", doctor: "Dr. Zain" },
    { time: "17:00", service: "2", patient: "K. Kiwi", client: "Chris Evans", doctor: "Dr. Sarah" },
]);

// Days of the month
const daysOfMonth = ref([]);

// Selected month
const selectedMonth = ref(new Date().toISOString().slice(0, 7)); // Default to current month (format: yyyy-MM)

// Watch for changes in the month input
watch(selectedMonth, (newMonth) => {
    generateDaysOfMonth(newMonth);
    distributeSchedules(); // Re-distribute schedules whenever the month changes
});

// Function to generate days for the selected month
const generateDaysOfMonth = (month) => {
    const [year, monthIndex] = month.split("-").map(Number);
    const date = new Date(year, monthIndex - 1, 1); // Start at the first day of the month
    const days = [];

    // Loop through the month
    while (date.getMonth() === monthIndex - 1) {
        days.push({
            day: date.toLocaleDateString("id-ID", { weekday: "long" }), // Full name of the day in Indonesian
            date: date.getDate(), // Day of the month
            schedules: [],
        });
        date.setDate(date.getDate() + 1); // Move to the next day
    }

    daysOfMonth.value = days;
};

// Function to randomly assign schedules to the days of the month
const distributeSchedules = () => {
    daysOfMonth.value.forEach(day => day.schedules = []); // Clear schedules first
    scheduleData.value.forEach(schedule => {
        const randomDayIndex = Math.floor(Math.random() * daysOfMonth.value.length);
        daysOfMonth.value[randomDayIndex].schedules.push(schedule);
    });
};

// Initialize with the current month
generateDaysOfMonth(selectedMonth.value);
distributeSchedules();
</script>

<template>
    <AuthenticatedLayout>
        <div class="flex flex-col w-full h-full gap-3">
            <div class="flex justify-end">
                <input 
                    type="month" 
                    v-model="selectedMonth" 
                    id="month" 
                    class="w-96 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    required 
                />
            </div>
            <div class="flex flex-col w-full h-screen overflow-y-auto items-center py-3 bg-white">
                <div class="flex w-full h-full justify-between gap-3">
                    <!-- Loop through each day of the month -->
                    <div 
                        v-for="(day, index) in daysOfMonth" 
                        :key="index" 
                        class="flex flex-col items-center gap-3 w-full border-r-2 px-2"
                    >
                        <div class="w-56 bg-primary-500 rounded py-1 text-white text-center shadow-md">
                            <h1 class="font-bold">{{ day.date }} {{ day.day }}</h1>
                        </div>
                        <!-- Loop through the schedules for each day -->
                        <ScheduleCard
                            v-for="(schedule, idx) in day.schedules"
                            :key="idx"
                            :time="schedule.time"
                            :service="schedule.service"
                            :patient="schedule.patient"
                            :client="schedule.client"
                            :doctor="schedule.doctor"
                        ></ScheduleCard>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
