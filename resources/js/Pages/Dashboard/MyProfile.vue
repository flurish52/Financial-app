<template>
    <DashboardMiniNav />
    <div class="w-full  mx-auto mt-10 p-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Profile Info Form -->
            <div class="lg:col-span-2 bg-white shadow-md rounded-lg p-6">
                <h2 class="text-blue-500 font-semibold mb-4">MY PROFILE</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Form Fields -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.first_name" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.middle_name" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.last_name" readonly>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.address" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.city" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">State</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.state" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Zip Code</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.zip_code" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.nationality" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.email" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.phone_number" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.dob" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gender</label>
                        <input type="text" class="mt-1 block w-full p-2 border-gray-300 rounded-md" v-model="$page.props.auth.user.gender" readonly>
                    </div>
                </div>
            </div>

            <!-- Profile Picture and File Upload -->
            <div class="bg-gradient-to-br from-cyan-400 to-blue-600 text-white rounded-lg shadow-md p-6 flex flex-col items-center">
                <img
                    src="{{asset('storage/avaters/'.Auth::user()->ava) }}"
                    alt="Profile"
                    class="w-24 h-24 rounded-full mb-4 object-cover"
                />
                <h3 class="text-xl font-semibold mb-2">Welcome!</h3>
                <p class="text-lg font-bold mb-6">{{ $page.props.auth.user.first_name }} {{ $page.props.auth.user.last_name }}</p>

                <form @submit.prevent="submit"
                class="flex justify-center items-center flex-col">
                <label for="passport" class=" flex justify-center items-center w-fit px-2 mb-4 text-center font-semibold px-4 py-2 ">
                    <input id="passport"
                           type="file"
                           class="hidden"
                           accept="image/*"
                           required
                    @change="uploadFile"
                    >
                    <div class="w-full flex items-center justify-center flex-col">
                        <p class="w-full px-2 text-center bg-white text-blue-600 font-semibold px-4 font-semibold px-4 py-2 rounded shadow">Choose file</p>
                        <p class="mt-2 text-sm">{{ form.errors.file }}</p>
                        <p class="mt-2 text-sm text-red-500" v-if="form.file">{{ form.file.name }}</p>
                        <p class="mt-2 text-sm text-red-500" v-else="form.file">no File choosen</p>
                    </div>
                </label>

                <button
                    type="submit"
                    @click="submit"
                    class="bg-black text-white font-semibold px-4 py-2 rounded-md">
                    UPLOAD PASSPORT
                </button>
</form>
            </div>
        </div>
    </div>
</template>

<script>
import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: authenticatedLayout,
    name: "ProfileCard",
};
</script>

<script setup>
import DashboardMiniNav from "@/Components/DashboardMiniNav.vue";
import {useForm} from "@inertiajs/vue3";

let form = useForm({
    file: ''
})

let uploadFile = (e) =>{
    form.file = e.target.files[0];

}
let submit =()=>{
    form.post('/upload-passport')
}
</script>
