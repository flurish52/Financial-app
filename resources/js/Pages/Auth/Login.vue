<template>
    <div class="flex h-full flex-col-reverse md:flex-row w-full bg-slate-50">
        <!-- Blue Section (Image and text) -->
        <div class="bg-blue-600 text-white md:w-1/2 flex justify-center items-center p-6">
            <div class="text-center md:w-full">
                <img src="https://sandertrustsfinancial.com/frontassets/images/mac.png" alt="Laptop image" class="mx-auto mb-6" />
                <h1 class="text-2xl font-bold">All In One Transfer Solutions</h1>
                <p class="mt-4">Transfer fund across countries in minutes and our fund transfer is instantly.</p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="h-24 flex-1 flex justify-center items-center md:flex md:items-start p-6">
            <div class="w-full max-w-md">
                <h2 class="text-xl font-semibold text-gray-800  my-12 md:my-6">
                    <img
                    src="../../../../storage/app/public/avatars/logo.png"
                    alt="American Trust Finance"
                    class=" w-52"
                />
                </h2>
                <h2 class="text-3xl font-bold md:text-4xl font-semibold text-gray-800 my-6 text-center w-full">Login Account</h2>
                <p class="p-1 my-3 text-center">Fill the form below to login to your American Trusts Finance.</p>
                <form @submit.prevent="submit" class="space-y-4">
                    <div>
                        <label for="account-number" class="block text-sm text-gray-700">Account Number</label>
                        <TextInput
                            id="account-number"
                            type="text"
                            v-model="form.phone_number"
                            class="w-full px-3 py-2 border "
                            placeholder="09047788543"
                            required
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.phone_number" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm text-gray-700">Password</label>
                        <TextInput
                            id="password"
                            type="password"
                            v-model="form.password"
                            class="w-full px-3 py-2 border rounded-full"
                            placeholder="******"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="flex items-center">
                        <Checkbox
                            id="remember-password"
                            v-model="form.remember"
                            class="mr-2"
                        />
                        <label for="remember-password" class="text-sm text-gray-700">Remember Password</label>
                    </div>

                    <PrimaryButton class="w-1/2 bg-blue-600 text-white py-2 rounded-md" :disabled="form.processing">LOGIN</PrimaryButton>
                </form>

                <p class="text-sm text-gray-600 mt-4">
                    Don't have an account? <a href="/register" class="text-green-600">Signup Now</a>
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    phone_number: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
