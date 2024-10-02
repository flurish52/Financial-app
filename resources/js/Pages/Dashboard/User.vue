<template>
    <DashboardMiniNav />
        <div class=" bg-gray-100 p-4">
            <!-- Top Section: Account Info -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Account Number -->
                <div class="bg-gradient-to-r from-teal-500 to-blue-600 text-white p-4 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col justify-between items-center">
                            <h2 class="text-sm font-semibold">Account Number</h2>
                            <p class="text-lg">{{ $page.props.auth.user.phone_number }}</p>
                        </div>
                        <div>
                            <!-- Icon Placeholder -->
                            <span class="material-icons text-4xl"></span>
                        </div>
                    </div>
                </div>

                <!-- Account Type -->
                <div class="bg-gradient-to-r from-gray-400 to-gray-500 text-white p-4 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-sm font-semibold">Account Type</h2>
                            <p class="text-lg">Online</p>
                        </div>
                        <div>
                            <!-- Icon Placeholder -->
                            <span class="material-icons text-4xl"></span>
                        </div>
                    </div>
                </div>

                <!-- Account Balance -->
                <div class="bg-gradient-to-r from-teal-500 to-blue-600 text-white p-4 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-sm font-semibold">Account Balance</h2>
                            <p class="text-lg">
                                {{ $page.props.auth.user.currency }}|
                                {{ props.account_details.balance }}
                            </p>
                        </div>
                        <div>
                            <!-- Icon Placeholder -->
                            <span class="material-icons text-4xl"></span>
                        </div>
                    </div>
                </div>

                <!-- Account Currency -->
                <div class="bg-gradient-to-r from-gray-400 to-gray-500 text-white p-4 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-sm font-semibold">Account Currency</h2>
                            <p class="text-lg text-right">{{ $page.props.auth.user.currency }}</p>
                        </div>
                        <div>
                            <!-- Icon Placeholder -->
                            <span class="material-icons text-4xl"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle Section: Profile, Notifications, ATM -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <!-- Profile Section -->
                <div class="flex justify-center items-between">
                    <div class="mx-auto  bg-gradient-to-r from-teal-500 to-blue-600 text-white p-6 rounded-lg shadow-lg text-center">
                        <img src="path-to-profile-image" alt="Profile Picture" class="mx-auto rounded-full w-24 h-24 mb-4">
                        <h2 class="text-lg font-semibold">Welcome, <br /> {{ $page.props.auth.user.first_name }}  {{ $page.props.auth.user.last_name }}</h2>
                        <a href="/my-profile">
                        <button
                        class="mt-4 bg-white text-teal-600 px-4 py-2 rounded-lg">View Profile</button>
                        </a>
                    </div>

                    <!-- Notifications Section -->
                    <div class="mx-auto  bg-gradient-to-r from-teal-500 to-blue-600 text-white p-6 rounded-lg shadow-lg text-center">
                    <h2 class="text-lg font-semibold">Notifications</h2>
                    <p class="mt-4">No notifications yet</p>
                </div>
                </div>

                <!-- ATM Image Section -->
                <div class="bg-white  rounded-lg shadow-lg w-full">
                    <img src="https://sandertrustsfinancial.com/dashassets/vid/Webp.net-gifmaker.gif" alt="ATM" class="w-full h-auto">
                </div>
            </div>

            <!-- Bottom Section: Transaction History -->
            <div class="mt-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-semibold mb-4">Recent Transaction History</h2>
                    <p class="text-gray-500">No data available</p>
                </div>
            </div>
        </div>
</template>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
export default {
layout: authenticatedLayout,

}
</script>
<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";
let props = defineProps({
    account_details: Object
})


</script>
