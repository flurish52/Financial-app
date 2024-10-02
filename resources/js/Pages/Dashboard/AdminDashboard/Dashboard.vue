<template>
    <h2 class="my-4  text-3xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">All Users</h2>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Full Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Account Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Account Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Balance
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                v-for="user in props.users"
            >
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{user.first_name + ' '+ user.last_name + ' '+ user.middle_name}}
                </th>
                <td class="px-6 py-4">
                    {{ user.email}}
                </td>
                <td class="px-6 py-4">
                    {{user.phone_number}}
                </td>
                <td class="px-6 py-4">
                    {{user.account_type}}
                </td>
                <td class="px-6 py-4"
                >
                   {{ userBalance }}
                </td>
                <td class="px-6 py-4">
                    <a :href="`/view-user/${user.id}`" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    name: "Dashboard",
    layout:  AdminLayout,
}
</script>

<script setup>
let props = defineProps({
    users: Array,
})

</script>
