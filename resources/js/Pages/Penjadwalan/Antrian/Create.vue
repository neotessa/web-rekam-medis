<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Button from "@/Components/Button.vue";
import Modal from "@/Components/Modal.vue";
import { usePage, Link, useForm, router } from "@inertiajs/vue3";
import { computed, ref } from "vue";

// Import other necessary dependencies and setup reactive properties
const titlePage = computed(() => usePage().props.titlePage);

// Format the date for input to get the stored data and update
const formatDateForInput = (dateString) => {
    if (!dateString) return '';
    const date = new Date(dateString);
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    return `${year}-${month}-${day}T${hours}:${minutes}`;
};

// Load data from the props
const page = usePage();
const clients = computed(() => page.props.clients);
const patients = computed(() => page.props.patients);
const doctors = computed(() => page.props.doctors);
const nurses = computed(() => page.props.nurses);
const reservation = computed(() => page.props.reservation || {});

// Setup form data with useForm
const form = useForm({
    reservation_date: formatDateForInput(reservation.value.reservation_date),
    service: reservation.value.service || '',
    nurse_id: reservation.value.nurse_id || '',
    client_id: reservation.value.client_id || '',
    patient_id: reservation.value.patient_id || '',
    doctor_id: reservation.value.doctor_id || '',
    status: reservation.value.status || '',
    created_by: page.props.auth.user.id,
});

// Submit form function
const submitForm = () => {
    if (reservation.value.id) {
        form.put(route('antrian.edit', reservation.value.id), {
            onSuccess: () => {
                form.reset();
            },
        });
    } else {
        form.post(route('antrian.create'), {
            onSuccess: () => {
                form.reset();
            },
        });
    }
};

// Modal visibility state
const isModalVisible = ref(false);
const reservationIdToDelete = ref(null);

// Show delete confirmation modal
const showDeleteModal = (id) => {
    isModalVisible.value = true;
    reservationIdToDelete.value = id;
};

// Close modal
const closeModal = () => {
    isModalVisible.value = false;
    reservationIdToDelete.value = null;
};

// Delete reservation
const deleteReservation = async () => {
    if (reservationIdToDelete.value) {
        await router.delete(route('antrian.destroy', reservationIdToDelete.value));
        closeModal();
    }
};

</script>

<template>
    <AuthenticatedLayout>
        <div class="mb-4 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold tracking-tight leading-none drop-shadow-sm text-gray-700 dark:text-white">
            {{ reservation.id ? 'Edit Antrian' : 'Buat Antrian Baru' }}
        </div>

        <div class="p-3 sm:p-5 w-full sm:w-3/4 md:w-2/3 lg:w-1/2 bg-white border rounded-md">
            <form @submit.prevent="submitForm">
                <!-- Booking Date Field -->
                <div class="mb-4 sm:mb-6">
                    <label for="reservation_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Booking</label>
                    <input
                        type="datetime-local"
                        id="reservation_date"
                        v-model="form.reservation_date"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                    <span v-if="form.errors.reservation_date" class="text-red-600 text-sm">{{ form.errors.reservation_date }}</span>
                </div>

                <!-- Service Field -->
                <div class="mb-4 sm:mb-6">
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Servis</label>
                    <select
                        id="service"
                        v-model="form.service"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Servis</option>
                        <option value="1">Appointment</option>
                        <option value="2">Grooming</option>
                        <option value="3">Rawat Inap</option>
                        <option value="4">Rawat Jalan</option>
                    </select>
                    <span v-if="form.errors.service" class="text-red-600 text-sm">{{ form.errors.service }}</span>
                </div>

                <!-- Nurse Field -->
                <div class="mb-6">
                    <label for="nurse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perawat PIC</label>
                    <select
                        id="nurse"
                        v-model="form.nurse_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Perawat PIC</option>
                        <option v-for="nurse in nurses" :key="nurse.id" :value="nurse.id">{{ nurse.name }}</option>
                    </select>
                    <span v-if="form.errors.nurse_id" class="text-red-600 text-sm">{{ form.errors.nurse_id }}</span>
                </div>

                <!-- Client Field -->
                <div class="mb-6">
                    <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Klien / Owner</label>
                    <select
                        id="client"
                        v-model="form.client_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Klien / Owner</option>
                        <option v-for="client in clients" :key="client.id" :value="client.id">{{ client.name }}</option>
                    </select>
                    <span v-if="form.errors.client_id" class="text-red-600 text-sm">{{ form.errors.client_id }}</span>
                </div>

                <!-- Patient Field -->
                <div class="mb-6">
                    <label for="patient" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien</label>
                    <select
                        id="patient"
                        v-model="form.patient_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Pasien</option>
                        <option v-for="patient in patients" :key="patient.id" :value="patient.id">{{ patient.name }}</option>
                    </select>
                    <span v-if="form.errors.patient_id" class="text-red-600 text-sm">{{ form.errors.patient_id }}</span>
                </div>

                <!-- Doctor Field -->
                <div class="mb-6">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter PIC</label>
                    <select
                        id="doctor"
                        v-model="form.doctor_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Dokter</option>
                        <option v-for="doctor in doctors" :key="doctor.id" :value="doctor.id">{{ doctor.name }}</option>
                    </select>
                    <span v-if="form.errors.doctor_id" class="text-red-600 text-sm">{{ form.errors.doctor_id }}</span>
                </div>

                <!-- Status Field -->
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select
                        id="status"
                        v-model="form.status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
                        <option selected disabled>Pilih Status</option>
                        <option value="1">Registered</option>
                        <option value="2">On Examination</option>
                        <option value="3">Done</option>
                    </select>
                    <span v-if="form.status" class="text-red-600 text-sm">{{ form.errors.status }}</span>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="w-full flex flex-col sm:flex-row gap-2">
                    <Button
                        type="submit"
                        :background="'bg-primary-700 dark:bg-primary-600 text-gray-100'"
                        :hover="'hover:bg-primary-800 dark:hover:bg-primary-700'"
                        :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-800'"
                        :disabled="form.processing"
                        @click="$emit('click')"
                        class="flex-1"
                    >
                        {{ reservation.id ? 'Update' : 'Submit' }}
                    </Button>

                    <Link
                        :href="route('antrian')"
                        class="flex-1"
                    >
                        <Button
                            :background="'bg-gray-700 dark:bg-gray-600 text-gray-100'"
                            :hover="'hover:bg-gray-800 dark:hover:bg-gray-700'"
                            :focus="'focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800'"
                            class="w-full"
                        >
                            Cancel
                        </Button>
                    </Link>

                    <!-- Delete Button (only shown on update route) -->
                    <Button
                        type="button"
                        v-if="reservation.id"
                        @click="showDeleteModal(reservation.id, $event)"
                        :background="'bg-red-500 dark:bg-red-500 text-gray-100'"
                        :hover="'hover:bg-red-600 dark:hover:bg-red-600'"
                        :focus="'focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800'"
                        class="flex-1"
                    >
                        <img src="/images/Trash.svg" alt="Trash Logo" class="w-5 inline align-middle" />
                    </Button>
                </div>
            </form>
        </div>

        <!-- Confirmation Modal -->
        <Modal :show="isModalVisible" @close="closeModal">
            <template v-slot:default>
                <div class="p-4">
                    <h2 class="text-gray-900 text-lg">Konfirmasi Hapus</h2>
                    <p class="px-4 py-4 font-medium text-gray-700 whitespace-nowrap dark:text-white">
                        Apakah Anda yakin ingin menghapus data ini?
                    </p>
                    <div class="flex w-full space-x-4">
                        <Button
                            @click="deleteReservation"
                            :background="'bg-red-500 dark:bg-red-500 text-gray-100'"
                            :hover="'hover:bg-red-600 dark:hover:bg-red-600'"
                            :focus="'focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800'"
                        >
                            Ya, Hapus
                        </Button>
                        <Button
                            @click="closeModal"
                            :background="'bg-primary-700 dark:bg-primary-600 text-gray-100'"
                            :hover="'hover:bg-primary-800 dark:hover:bg-primary-700'"
                            :focus="'focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-800'"
                        >
                            Cancel
                        </Button>
                    </div>
                </div>
            </template>
        </Modal>
    </AuthenticatedLayout>
</template>
