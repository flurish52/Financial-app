<template>
    <nav class="bg-transparent bg-blue-600 z-10 absolute top-0 left-0 w-full flex justify-between items-center p-6">
        <div class="flex items-center space-x-3">
            <img src="../../../storage/app/public/avatars/logo.png" alt="Logo" class="w-1/4" />
<!--            <h1 class="text-lg font-semibold">American Trust Fund</h1>-->
        </div>
        <ul class="md:flex space-x-6">
            <li><a href="/Home" class="hover:text-gray-300">Home</a></li>
            <li><a href="/About" class="hover:text-gray-300">About</a></li>
            <li><a href="/FAQs" class="hover:text-gray-300">FAQs</a></li>
            <li><a href="/Contact" class="hover:text-gray-300">Contact</a></li>
            <li>
                <button v-if="isLoggedIn" @click="goToDashboard" class="border border-white py-1 px-3 rounded-lg hover:bg-white hover:text-blue-900 transition"><a href="/dashboard">Dashboard</a></button>
                <button v-else @click="goToLogin" class="border border-white py-1 px-3 rounded-lg hover:bg-white hover:text-blue-900 transition"><a href="/login">Login</a></button>
            </li>
        </ul>
        <!-- Mobile Menu -->
        <button @click="toggleMenu" class="md:hidden focus:outline-none text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu Dropdown -->
    <div v-if="menuOpen" class="absolute top-0 left-0 w-full bg-blue-800 p-6 md:hidden">
        <ul class="space-y-4 bg-white">
            <li><a href="#" class="block hover:text-gray-300">Home</a></li>
            <li><a href="#" class="block hover:text-gray-300">About</a></li>
            <li><a href="#" class="block hover:text-gray-300">FAQs</a></li>
            <li><a href="#" class="block hover:text-gray-300">Contact</a></li>
            <li>
                <button v-if="isLoggedIn" @click="goToDashboard" class="w-full border border-white py-1 px-3 rounded-lg hover:bg-white hover:text-blue-900 transition">Dashboard</button>
                <button v-else @click="goToLogin" class="w-full border border-white py-1 px-3 rounded-lg hover:bg-white hover:text-blue-900 transition">Login</button>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isLoggedIn: false, // Update based on user status
            menuOpen: false,   // For mobile menu toggling
        };
    },
    methods: {
        toggleMenu() {
            this.menuOpen = !this.menuOpen;
        },
        goToLogin() {
            // Navigate to login page
            console.log('Redirect to Login');
        },
        goToRegister() {
            // Navigate to register page
            console.log('Redirect to Register');
        },
        goToDashboard() {
            // Navigate to dashboard page
            console.log('Redirect to Dashboard');
        },
    },
    mounted() {
        // Here you can check if the user is logged in, for now, it's set to false.
        // Example: Check user auth status from a service or local storage
        const userStatus = localStorage.getItem('isLoggedIn'); // Example logic
        this.isLoggedIn = userStatus === 'true'; // Adjust login condition based on your auth logic
    },
};
</script>
