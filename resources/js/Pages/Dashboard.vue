<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
            <div class="min-h-screen bg-gray-50">
                <!-- Header Section -->
                <div class="flex flex-wrap justify-between items-center p-4 bg-gradient-to-r from-teal-500 to-blue-600 text-white">
                    <!-- Account Info -->
                    <div class="p-4 flex-1 md:w-1/4 sm:w-full mb-4">
                        <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                            <h2 class="text-lg font-semibold">Account Info</h2>
                            <p class="text-sm">0801725633</p>
                        </div>
                    </div>

                    <!-- Account Type -->
                    <div class="p-4 flex-1 md:w-1/4 sm:w-full mb-4">
                        <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                            <h2 class="text-lg font-semibold">Account Type</h2>
                            <p class="text-sm">Online</p>
                        </div>
                    </div>

                    <!-- Account Balance -->
                    <div class="p-4 flex-1 md:w-1/4 sm:w-full mb-4">
                        <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                            <h2 class="text-lg font-semibold">Account Balance</h2>
                            <p class="text-sm">$0.00</p>
                        </div>
                    </div>

                    <!-- Account Currency -->
                    <div class="p-4 flex-1 md:w-1/4 sm:w-full mb-4">
                        <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                            <h2 class="text-lg font-semibold">Account Currency</h2>
                            <p class="text-sm">$</p>
                        </div>
                    </div>
                </div>

                <!-- User Profile Section -->
                <div class="flex flex-wrap justify-between items-center p-4">
                    <div class="p-4 w-full md:w-1/3">
                        <div class="bg-gradient-to-r from-teal-500 to-blue-600 text-white p-6 rounded-lg text-center">
                            <img src="path-to-profile-image" alt="Profile Picture" class="mx-auto rounded-full h-24 w-24 mb-4">
                            <h2 class="text-lg font-semibold">Welcome, User</h2>
                            <button class="mt-4 bg-white text-teal-600 px-4 py-2 rounded-lg">View Profile</button>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="p-4 w-full md:w-1/3">
                        <div class="bg-gradient-to-r from-teal-500 to-blue-600 text-white p-6 rounded-lg text-center">
                            <h2 class="text-lg font-semibold">Notifications</h2>
                            <p class="mt-4">No notifications yet</p>
                        </div>
                    </div>

                    <!-- ATM Image -->
                    <div class="p-4 w-full md:w-1/3">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <img src="path-to-atm-image" alt="ATM Image" class="w-full h-auto">
                        </div>
                    </div>
                </div>

                <!-- Recent Transaction History -->
                <div class="p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-lg font-semibold mb-4">Recent Transaction History</h2>
                        <p class="text-gray-500">No data available</p>
                    </div>
                </div>
            </div>

    </AuthenticatedLayout>
</template>
