<template>
    <div class="flex h-screen sticky">
        <!-- Sidebar -->
        <div
            :class="{
        'translate-x-0': isSidebarOpen,
        '-translate-x-full': !isSidebarOpen,
      }"
            class="fixed inset-y-0 left-0 w-64 bg-gray-900 text-white transform transition-transform duration-300 ease-in-out z-50 md:relative md:translate-x-0"
        >
            <!-- Logo -->
            <div class="flex items-center justify-center py-6">
                <img
                    src="../../../storage/app/public/avatars/logo.png"
                    alt="Sander Trust Financial"
                    class="h-10"
                />
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-4">
                <ul class="space-y-4">
                    <li>
                        <a href="/dashboard" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-home"></i>
                                <font-awesome-icon icon="fa-solid fa-house" />
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/domestic-transfer" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-user-friends"></i>
                            <span>Domestic Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="/local-transfer" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-search"></i>
                            <span>Local Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="/international-transfer" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-globe"></i>
                            <span>International Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transaction-history" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-history"></i>
                            <span>Transaction History</span>
                        </a>
                    </li>
                    <li>
                        <a href="/account-statement" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-file-alt"></i>
                            <span>Account Statement</span>
                        </a>
                    </li>
                    <li>
                        <a href="/my-profile" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-user"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/account-settings" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-cog"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact-us" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-envelope"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>


                </ul>
                <li>
                    <button type="submit"
                                @click="submit"
                                class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                </li>
            </nav>
        </div>

        <!-- Content and Mobile Navbar -->
        <div class="flex-1 flex flex-col">
            <!-- Mobile Navbar -->
            <header class="md:hidden flex justify-between items-center p-4 bg-white shadow-md">
                <img
                    src="https://sandertrustsfinancial.com/frontassets/images/logo.png"
                    alt="Sander Trust Financial"
                    class="h-8"
                />
                <!-- Hamburger button -->

                    <button @click="toggleSidebar" class="text-gray-600">
                        <i class="fas fa-bars text-2xl">Open</i> <!-- Hamburger icon -->
                    </button>
            </header>

            <!-- Main Content Area -->
            <div class="pt-0 overflow-y-scroll">
                <slot>

                </slot>
            </div>
        </div>
    </div>


</template>

<script>
export default {
    data() {
        return {
            isSidebarOpen: false,
        };
    },
    methods: {
        toggleSidebar() {
            this.isSidebarOpen = !this.isSidebarOpen;
        },
    },
};
</script>
<script setup>
import {useForm} from "@inertiajs/vue3";

let form = useForm({
})
let submit = () =>{
    form.post('/logout')
}
</script>
