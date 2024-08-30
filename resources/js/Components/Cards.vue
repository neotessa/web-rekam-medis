<template>
    <div
        :class="borderColor"
        class="flex w-56 flex-col rounded-md overflow-hidden p-2"
    >
        <p class="text-sm md:text-base font-semibold text-center underline">
            {{ time }}
        </p>
        <p class="text-base md:text-base font-bold text-center italic">
            {{ serviceName }}
        </p>
        <p
            class="text-sm md:text-base font-semibold truncate text-ellipsis"
            :title="patient"
        >
            {{ patient }}
        </p>
        <p
            class="text-xs md:text-sm font-medium truncate text-ellipsis"
            :title="client"
        >
            {{ client }}
        </p>
        <p
            class="text-xs md:text-sm font-medium truncate text-ellipsis"
            :title="doctor"
        >
            {{ doctor }}
        </p>
        <p class="text-xs md:text-sm font-medium">{{ status }}</p>
    </div>
</template>

<script>
export default {
    props: {
        service: {
            type: String,
            default: "{{ Service }}",
        },
        time: {
            type: String,
            default: "{{ Time }}",
        },
        patient: {
            type: String,
            default: "{{ Patient }}",
        },
        client: {
            type: String,
            default: "{{ Client }}",
        },
        doctor: {
            type: String,
            default: "{{ Doctor }}",
        },
        status: {
            type: String,
            default: "{{ Status }}",
        },
    },
    computed: {
        serviceName() {
            // Mapping service integers to their respective names
            const serviceMap = {
                '1': 'Appointment',
                '2': 'Grooming',
                '3': 'Rawat Inap',
                '4': 'Rawat Jalan',
            };
            return serviceMap[this.service] || 'Unknown Service'; // Default if none match
        },
        borderColor() {
            // Color coding based on service type
            switch (this.service) {
                case '1':
                    return 'border-l-8 border-l-green-500 bg-green-200';
                case '2':
                    return 'border-l-8 border-l-blue-500 bg-blue-200';
                case '3':
                    return 'border-l-8 border-l-red-500 bg-red-200';
                case '4':
                    return 'border-l-8 border-l-yellow-500 bg-yellow-200';
                default:
                    return 'border-l-8 border-l-gray-500 bg-gray-200'; // Default color if none match
            }
        },
    },
};
</script>
