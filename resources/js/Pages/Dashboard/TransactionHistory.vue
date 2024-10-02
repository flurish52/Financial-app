<template>
    <dashboardMiniNav />
    <div class="w-full mx-6 mx-auto mt-10">
        <!-- Card Container -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Title -->
            <div class="p-4 bg-gray-100">
                <h2 class="text-blue-500 font-semibold">TRANSACTION HISTORY</h2>
            </div>

            <!-- Table Header -->
            <div class="bg-white border-b border-gray-200">
                <div class="grid grid-cols-5 text-sm font-semibold text-gray-500 px-4 py-2">
                    <span>Date / Time</span>
                    <span>Credit / Debit</span>
                    <span>Description</span>
                    <span>Amount</span>
                    <span>Available Balance</span>
                </div>
            </div>

            <!-- No Data Message -->
            <div class="text-center text-gray-400 p-8">
                <p class="text-lg">NO DATA AVAILABLE</p>
            </div>
        </div>
    </div>
</template>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: authenticatedLayout,
    name: "TransactionHistory",
};
</script>
<script setup>
import dashboardMiniNav from "@/Components/DashboardMiniNav.vue";
</script>
