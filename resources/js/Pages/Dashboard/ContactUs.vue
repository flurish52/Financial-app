<template>
    <DashboardMiniNav />
    <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start p-4 lg:p-8">
        <!-- Contact Form Section -->
        <div class="w-full lg:w-2/3 bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">CONTACT US</h2>
            <p class="text-gray-600 mb-4">
                Do you have questions to ask or want to make inquiries? Kindly contact us using the email below.
                We will be glad to assist you.
            </p>
            <p class="text-gray-800 font-medium mb-6">
                Email: <a href="mailto:info@americantrustfinance.com" class="text-blue-500">info@americantrustfinance.com</a>
            </p>
            <form @submit.prevent="submitForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label class="mb-2 font-medium text-gray-700">Your name</label>
                        <input v-model="name" type="text" class="border border-gray-300 rounded-lg p-2" placeholder="Your name" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-2 font-medium text-gray-700">Email address</label>
                        <input v-model="email" type="email" class="border border-gray-300 rounded-lg p-2" placeholder="Your email address" />
                    </div>
                </div>
                <div class="flex flex-col mt-4">
                    <label class="mb-2 font-medium text-gray-700">Subject</label>
                    <input v-model="subject" type="text" class="border border-gray-300 rounded-lg p-2" placeholder="Subject" />
                </div>
                <div class="flex flex-col mt-4">
                    <label class="mb-2 font-medium text-gray-700">Write message</label>
                    <textarea v-model="message" rows="5" class="border border-gray-300 rounded-lg p-2" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
                    SEND
                </button>
            </form>
        </div>

        <!-- Profile Section -->
        <div class="w-full lg:w-1/3 mt-6 lg:mt-0 lg:ml-8 bg-gradient-to-b from-teal-400 to-blue-500 text-white p-6 rounded-lg flex flex-col items-center">
            <img class="w-24 h-24 rounded-full border-4 border-white mb-4" src="https://via.placeholder.com/150" alt="Profile Image" />
            <h3 class="text-xl font-semibold mb-2">Welcome!</h3>
            <p class="text-2xl font-bold">
                {{ $page.props.auth.user.first_name }}
                {{ $page.props.auth.user.last_name }}

            </p>
            <a href="/my-profile">
            <button class="mt-4 bg-white text-blue-500 py-2 px-6 rounded-lg hover:bg-gray-200 transition duration-300">
                VIEW PROFILE
            </button>
            </a>
        </div>
    </div>
</template>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: authenticatedLayout,
    data() {
        return {
            name: '',
            email: '',
            subject: '',
            message: ''
        };
    },
    methods: {
        submitForm() {
            // Handle form submission (send email, display alert, etc.)
            alert('Form submitted!');
        }
    }
};
</script>

<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";
</script>
