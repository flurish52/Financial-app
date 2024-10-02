<template>
    <NavigationBar />
    <section class="bg-white">
        <!-- Header section with background image -->
        <div class="relative h-64 bg-cover bg-center" style="background-image: url('https://sandertrustsfinancial.com/frontassets/images/banner/1.jpg')">
            <div class="absolute inset-0 bg-blue-900 opacity-70"></div>
            <div class="relative z-10 flex flex-col items-center justify-center h-full">
                <h2 class="text-white text-2xl font-bold">Create Account</h2>
                <p class="text-white mt-2">Fill the form below to create an account on Sander Trusts Financial Bank.</p>
                <button class="mt-4 px-6 py-2 bg-transparent border border-white text-white hover:bg-white hover:text-blue-900 transition duration-200 rounded">
                    New Account
                </button>
            </div>
        </div>

        <!-- Signup Form Section -->
        <div class="container mx-auto mt-8 p-6 bg-gray-50 shadow-md rounded-md md:w-1/2">
            <h3 class="text-gray-900 text-xl font-semibold mb-4">Signup</h3>
            <p class="text-gray-600 mb-6">
                Fill the form below to create an account. Please note, you must fill the required fields.
            </p>
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input v-model="form.username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="username" type="text" placeholder="Enter username">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address</label>
                    <input v-model="form.email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="email" type="email" placeholder="Enter email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="first-name">First Name</label>
                    <input v-model="form.firstName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="first-name" type="text" placeholder="Enter first name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="middle-name">Middle Name</label>
                    <input v-model="form.middleName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="middle-name" type="text" placeholder="Enter middle name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="last-name">Last Name</label>
                    <input v-model="form.lastName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="last-name" type="text" placeholder="Enter last name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Residential Address</label>
                    <input v-model="form.address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="address" type="text" placeholder="Enter residential address">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City</label>
                    <input v-model="form.city" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="city" type="text" placeholder="Enter city">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="state">State</label>
                    <input v-model="form.state" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="state" type="text" placeholder="Enter state">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="zip-code">Zip Code</label>
                    <input v-model="form.zipCode" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" id="zip-code" type="text" placeholder="Enter zip code">
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <!-- Nationality -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nationality</label>
                        <input v-model="form.nationality" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Nationality">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input v-model="form.phoneNumber" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Phone Number">
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input v-model="form.dob" type="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                    </div>

                    <!-- Gender -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gender</label>
                        <select v-model="form.gender" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                            <option>Select option</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <!-- Employment Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Employment Status</label>
                        <select v-model="form.employmentStatus" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                            <option>Select option</option>
                            <option>Employed</option>
                            <option>Unemployed</option>
                            <option>Student</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <!-- Account Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Account Type</label>
                        <select v-model="form.accountType" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                            <option>Select option</option>
                            <option>Savings</option>
                            <option>Current</option>
                        </select>
                    </div>

                    <!-- Currency -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Currency</label>
                        <select v-model="form.currency" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                            <option>Select option</option>
                            <option>USD</option>
                            <option>EUR</option>
                            <option>NGN</option>
                        </select>
                    </div>

                    <!-- Transaction Pin Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Transaction Pin Number</label>
                        <input v-model="form.transactionPin" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="****">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input v-model="form.password" type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Password">
                    </div>

                    <!-- Repeat Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Repeat Password</label>
                        <input v-model="form.password_confirmation" type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Repeat Password">
                    </div>

                    <!-- Next of Kin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Next of Kin</label>
                        <input v-model="form.nextOfKin" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Next of Kin">
                    </div>

                    <!-- Next of Kin Address -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Next of Kin Address</label>
                        <input v-model="form.nextOfKinAddress" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Next of Kin Address">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <!-- Relationship -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Relationship</label>
                        <input v-model="form.relationship" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Relationship">
                    </div>

                    <!-- Next of Kin Phone Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Next of Kin Phone Number</label>
                        <input v-model="form.nextOfKinPhoneNumber" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Phone Number">
                    </div>

                    <!-- Next of Kin Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Next of Kin Email</label>
                        <input v-model="form.nextOfKinEmail" type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2" placeholder="Next of Kin Email">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                @click="submit"
                                class="mt-2 w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </section>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";
import NavigationBar from "@/Components/NavigationBar.vue";

let form = useForm({
                username: '',
                name: 'name',
                email: '',
                firstName: '',
                middleName: '',
                lastName: '',
                address: '',
                city: '',
                state: '',
                zipCode: '',
                nationality: '',
                phoneNumber: '',
                dob: '',
                gender: '',
                employmentStatus: '',
                accountType: '',
                currency: '',
                transactionPin: '',
                password: '',
    password_confirmation: '',
                nextOfKin: '',
                nextOfKinAddress: '',
                relationship: '',
                nextOfKinPhoneNumber: '',
                nextOfKinEmail: ''

})

let submit = ()=> {
    form.post('/register')
    console.log(form);
}
</script>
