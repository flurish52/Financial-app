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
                    alt="American Trust Finance"
                    class="h-10"
                />
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-4">
                <ul class="space-y-4">
                    <li>
                        <a href="/admin-dashboard" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-home"></i>
                            <font-awesome-icon icon="fa-solid fa-house" />
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-user-friends"></i>
                            <span>All Users</span>
                        </a>
                    </li>  <li>
                    <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                        <i class="fas fa-user-friends"></i>
                        <span>All Domestic Transfer</span>
                    </a>
                </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-search"></i>
                            <span>All Local Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-globe"></i>
                            <span>All International Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-history"></i>
                            <span>All Transaction Histories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 hover:text-yellow-500">
                            <i class="fas fa-envelope"></i>
                            <span>Messages</span>
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
                    alt="American Trust Fianance"
                    class="h-8"
                />
                <!-- Hamburger button -->

                <button @click="toggleSidebar" class="text-gray-600">
                    <i class="fas fa-bars text-2xl">Open</i> <!-- Hamburger icon -->
                </button>
            </header>

            <!-- Main Content Area -->
            <div class="pt-0 overflow-y-scroll">
                <DashboardMiniNav />
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
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";

let form = useForm({
})
let submit = () =>{
    form.post('/logout')
}
</script>
