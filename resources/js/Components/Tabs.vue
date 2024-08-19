<script setup>
import { ref } from "vue";

const activeTab = ref(null);
</script>

<template>
    <div
        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-5"
    >
        <ul class="flex flex-wrap justify-between -mb-px">
            <div class="flex">
                <li class="me-2">
                    <a
                        :href="route('antrian')"
                        :class="
                            page === 'terjadwal' ? activeTabs : inactiveTabs
                        "
                        >Terjadwal</a
                    >
                </li>
                <li class="me-2">
                    <a
                        :href="route('antrian.memulai')"
                        :class="page === 'memulai' ? activeTabs : inactiveTabs"
                        >Memulai</a
                    >
                </li>
                <li class="me-2">
                    <a
                        :href="route('antrian.selesai')"
                        :class="page === 'selesai' ? activeTabs : inactiveTabs"
                        >Selesai</a
                    >
                </li>
            </div>
            <div class="flex">
                <li class="me-2">
                    <a
                        :href="route('antrian.inpatient')"
                        :class="
                            page === 'rawat-inap' ? activeTabs : inactiveTabs
                        "
                        >Rawat Inap</a
                    >
                </li>
                <li>
                    <a
                        :href="route('antrian.outpatient')"
                        :class="
                            page === 'rawat-jalan' ? activeTabs : inactiveTabs
                        "
                        >Rawat Jalan</a
                    >
                </li>
            </div>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        page: String,
    },
    data() {
        return {
            activeTabs:
                "inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 hover:text-blue-600 hover:border-blue-600 dark:hover:text-blue-600",
            inactiveTabs:
                "inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300",
        };
    },
};
</script>
