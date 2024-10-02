<template>
    <nav class="bg-blue-900 p-4 flex justify-between items-center">
        <!-- Left: Logo -->
        <div class="flex items-center">
            <img src="../../../storage/app/public/avatars/logo.png" alt="American Trust Fund" class="h-6 w-auto" />
        </div>

        <!-- Right: Navigation Links -->
        <div class="hidden md:flex space-x-4 text-white text-sm font-medium">
            <a href="/home" class="hover:text-yellow-400">Home</a>
            <a href="/about" class="hover:text-yellow-400">About</a>
            <a href="/faqs" class="hover:text-yellow-400">FAQs</a>
            <a href="/contact" class="hover:text-yellow-400">Contact</a>
            <a href="/login" class="border border-white px-3 py-1 rounded hover:bg-white hover:text-blue-900 transition">Log in</a>
        </div>

        <!-- Hamburger Menu for smaller screens -->
        <div class="md:hidden">
            <button @click="toggleMenu" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isOpen" class="absolute top-16 left-0 w-full bg-blue-900 md:hidden flex flex-col space-y-4 p-4">
            <a href="/home" class="text-white hover:text-yellow-400">Home</a>
            <a href="/about" class="text-white hover:text-yellow-400">About</a>
            <a href="/faqs" class="text-white hover:text-yellow-400">FAQs</a>
            <a href="/contact" class="text-white hover:text-yellow-400">Contact</a>
            <a href="/login" class="text-white hover:bg-yellow-400 bg-white px-3 py-2 rounded">Log in</a>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen;
        },
    },
};
</script>

<style scoped>
/* Add any specific styles for the nav bar */
</style>
