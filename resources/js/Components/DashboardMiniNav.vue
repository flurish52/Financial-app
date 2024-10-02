<template>
    <div>
        <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1100&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    </div>
    <div class="relative bg-white p-4 shadow-md flex justify-between items-center">

<translator />



        <!-- Search and Toggle -->
        <div class="flex items-center">
            <button @click="toggleSearch" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-search">Search</i>
            </button>
            <input
                v-if="showSearch"
                type="text"
                placeholder="Search..."
                class="ml-2 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- User Profile and Dropdown -->
        <div class="relative">
            <div class="flex items-center space-x-2">
                <!-- User Image -->
                <img
                    src="https://via.placeholder.com/40"
                 alt="Profile"
                class="w-10 h-10 rounded-full"
                />
                <!-- Dropdown Toggle -->
                <button @click="toggleDropdown" class="focus:outline-none">
                    <i class="fas fa-caret-down text-gray-500 hover:text-gray-700">toggle</i>
                </button>
            </div>

            <!-- Dropdown Menu -->
            <div
                v-if="showDropdown"
                class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 text-gray-700"
            >
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Messages</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Notifications</a>
                <button
                    @click="logout"
                    class="block px-4 py-2 hover:bg-gray-100">Logout</button>
            </div>
        </div>
    </div>
</template>

<!--<script>-->
<!--export default {-->
<!--    data() {-->
<!--        return {-->
<!--            showSearch: false,-->
<!--            showDropdown: false-->
<!--        };-->
<!--    },-->
<!--    methods: {-->
<!--        toggleSearch() {-->
<!--            this.showSearch = !this.showSearch;-->
<!--        },-->
<!--        toggleDropdown() {-->
<!--            this.showDropdown = !this.showDropdown;-->
<!--        }-->
<!--    }-->
<!--};-->
<!--</script>-->
<!--<script setup>-->
<!--import Translator from "@/Components/translator.vue";-->

<!--let logout =()=>{-->
<!--    axios.post('/logout')-->
<!--        .then(res =>{-->

<!--        })-->
<!--        .catch(err=>{-->
<!--            console.log(err)-->
<!--        })-->
<!--}-->
<!--</script>-->
