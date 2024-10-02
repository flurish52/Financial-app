<template>
    <DashboardMiniNav />
    <div class="w-full mx-auto mt-10 p-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Password and Pin Change Form -->
            <div class="lg:col-span-2 bg-white shadow-md rounded-lg p-6">
                <h2 class="text-blue-500 font-semibold mb-4">CHANGE ACCOUNT PASSWORD AND TRANSACTION PIN</h2>
                <div class="space-y-4">
                    <!-- Change Password Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Change Password</label>
                        <input
                            type="password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            placeholder="Enter new password"
                        />
                    </div>

                    <!-- Change Pin Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Change Pin</label>
                        <input
                            type="password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            placeholder="Enter new transaction pin"
                        />
                    </div>

                    <!-- Old Password Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Old Password</label>
                        <input
                            type="password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            placeholder="Enter your previous password"
                        />
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profile Card -->
            <div class="bg-gradient-to-br from-cyan-400 to-blue-600 text-white rounded-lg shadow-md p-6 flex flex-col items-center">
                <h3 class="text-xl font-semibold mb-2">Welcome!</h3>
                <p class="text-lg font-bold mb-6">{{ $page.props.auth.user.first_name }}  {{ $page.props.auth.user.last_name }}</p>


                <a href="/my-profile">
                <button class="bg-black text-white font-semibold px-4 py-2 rounded-md hover:bg-gray-800">
                    VIEW PROFILE
                </button>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: authenticatedLayout,
    name: "PasswordChange",
};
</script>

<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";

</script>
