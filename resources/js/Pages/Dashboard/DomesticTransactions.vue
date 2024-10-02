<template>
 <DashboardMiniNav />

    <div class="min-h-screen bg-gray-100 flex items-start justify-center p-4">
        <!-- Dashboard Wrapper -->
        <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Profile Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                <img
                    class="w-32 h-32 rounded-full border-4 border-white shadow-md"
                    src="https://via.placeholder.com/150"
                    alt="Profile Picture"
                />
                <p class="text-gray-500">Welcome!</p>
                <h2 class="mt-4 text-xl font-bold text-gray-700">{{ $page.props.auth.user.first_name }}  {{ $page.props.auth.user.last_name }}</h2>
                <a href="/my-profile">
                    <button
                        class="mt-6 bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700"
                    >
                        View Profile
                    </button>
                </a>
            </div>

            <!-- Transfer Form Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 col-span-2">
                <h3 class="text-xl font-bold text-gray-700 mb-4">Domestic Transfer</h3>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label
                            class="block text-gray-600 font-medium mb-2"
                            for="beneficiary"
                        >
                            Beneficiary (Account Number)
                        </label>
                        <input
                            v-model="form.beneficiary"
                            type="text"
                            id="beneficiary"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter Account Number"
                        />
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-600 font-medium mb-2" for="amount">
                            Amount
                        </label>
                        <input
                            v-model="form.amount"
                            type="text"
                            id="amount"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter Amount"
                        />
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
                    >
                        Transfer
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: AuthenticatedLayout,
    data() {
        return {
            form: {
                beneficiary: '',
                amount: '',
            },
        };
    },
    methods: {
        submitForm() {
            // Here you can handle form submission using Inertia
            this.$inertia.post('/transfer', this.form);
        },
    },
};
</script>

<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";
</script>
