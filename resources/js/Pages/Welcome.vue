<template>
    <GuestNavBar />
    <div class="absolute min-h-screen bg-blue-900 text-white  p-0 m-0 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://sandertrustsfinancial.com/frontassets/images/banner/1.jpg');"></div>

        <!-- Overlay to make text more readable -->
        <div class=" z-10 flex flex-col justify-center items-center text-center mt-20 p-8 lg:mt-40">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Welcome To Sander Trusts Financial Bank</h1>
            <p class="text-lg lg:text-xl mb-6">
                Open your Sander Trusts Financial Bank Account and make your first direct deposit into this account within 60 days.
                Keep an average beginning day balance of $15,000. We are a bank without borders.
            </p>
            <div class="flex space-x-4">
               <a href="/login"> <button class="bg-blue-900 border border-white py-2 px-6 rounded-lg hover:bg-white hover:text-blue-900 transition">Login</button></a>
               <a href="/register"> <button class="bg-blue-900 border border-white py-2 px-6 rounded-lg hover:bg-white hover:text-blue-900 transition">Register</button></a>
            </div>
        </div>
    </div>
</template>

<script>
import defaultLayout from "@/Layouts/DefaultLayout.vue";

export default {
    layout: defaultLayout,
};
</script>
<script setup>
import GuestNavBar from "@/Components/GuestNavBar.vue";
</script>
