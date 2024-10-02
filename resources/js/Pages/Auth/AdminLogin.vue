<template>
    <div class="flex h-full flex-col-reverse md:flex-row w-full bg-slate-50">
        <div class=" bg-blue-200 h-screen flex-1 flex justify-center items-center md:flex md:items-start p-6">
            <div class="w-full max-w-md">
                <h2 class="text-xl font-semibold text-gray-800  my-12 md:my-6">
                    <img
                        src="../../../../storage/app/public/avatars/logo.png"
                        alt="American Trust Finance"
                        class=" w-52"
                    />
                </h2>
                <h2 class="text-3xl font-bold md:text-4xl font-semibold text-gray-800 my-6 text-center w-full">Login Account</h2>
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

                    <PrimaryButton class="w-1/2 bg-blue-3300 text-white py-2 rounded-md font-bold" :disabled="form.processing">LOGIN</PrimaryButton>
                </form>
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
});

const submit = () => {
    if (form.phone_number === '08147118680'){
        form.post(route('admin.login'), {
            onFinish: () => form.reset('password'),
        });
    }else{
        alert('Incorrect Account Number')
    }
};
</script>
