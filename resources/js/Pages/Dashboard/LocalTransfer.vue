<template>
    <dashboard-mini-nav />
    <div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class=" w-full bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-left text-2xl font-extrabold text-gray-900 mb-6">Local Transfer</h2>

            <form>
                <div class="mb-4">
                    <label for="bank-name" class="block text-sm font-medium text-gray-700">Receiver's Bank</label>
                    <input type="text" id="bank-name" placeholder="Enter Bank Name"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div class="mb-4">
                    <label for="account-type" class="block text-sm font-medium text-gray-700">Receiver's Account Type</label>
                    <select id="account-type"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option>Select Account Type</option>
                        <option>Saving</option>
                        <option>Current</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="account-number" class="block text-sm font-medium text-gray-700">Account Number</label>
                    <input type="text" id="account-number" placeholder="Enter Account Number"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700">Amount To Transfer</label>
                    <input type="text" id="amount" value=""
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-gray-100 rounded-md shadow-sm sm:text-sm">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Transaction Password</label>
                    <input type="password" id="password" placeholder="Enter Password"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <button type="submit" class="md:w-1/5 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                    TRANSFER
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";
</script>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: authenticatedLayout
}
</script>
