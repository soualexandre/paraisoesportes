<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MenuIcon from 'vue-material-design-icons/Plus.vue';
import { Head } from '@inertiajs/vue3';

components: {
  MenuIcon;
}
</script>

<style>
.icon-plus{
  width: 200px;
  height: 200px;
}
</style>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-xs ">
                <div class="bg-white overflow-hidden h-36 shadow-sm sm:rounded-lg   motion-safe:hover:scale-[1.06]  transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <!-- <MenuIcon class="text-lg con-plus"/> -->
                    <i class="fa-solid fa-plus"></i>
                    <!-- <span class="mdi-plus" /> -->
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
             </div>
        </div>
    </AuthenticatedLayout>
</template>
