<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import MenuIcon from "vue-material-design-icons/Plus.vue";
import { Head, Link } from "@inertiajs/vue3";
import { InertiaLink } from "@inertiajs/inertia-vue3";

import profile from "@/images/corrida.png";

components: {
  MenuIcon;
}

defineProps({
  esportes: Object,
});
</script>

<style>
.icon-plus {
  width: 200px;
  height: 200px;
}
</style>

<template>
  <Head title="Paraíso Esportes" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Paraíso Esportes
      </h2>
    </template>

    <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
      <div class="max-w-xs">
        <Link
          :href="route('add-sport')"
          class="flex justify-center column items-center bg-white overflow-hidden h-36 shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.06] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
        >
          <i class="fa-solid fa-plus fa-3x text-orange-500"></i>
          <div class="p-6 text-orange-500">Adicionar Local</div>
        </Link>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <label class="text-xl font-bold"> Futebol de Salão </label>
    </div>
    <div class="flex items-center flex-col">
      <div
        class="overflow-x-scroll overflow-y-hidden p-4 scrollbar-hide flex-col"
      >
        <div
          class="flex gap-6 lg:gap-8 mt-4"
          data-simplebar
          style="min-width: 600px; max-width: 1200px"
        >
          <InertiaLink
            v-for="esporte in esportes"
            :href="route('localdetail', { id: esporte.id })"
            :key="esporte.id"
            class="scale-100 text-orange-500 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col items-center motion-safe:hover:scale-[1.06] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
            style="min-width: 300px"
          >
            <img
              class="w-24 h-24 mb-3 rounded-full shadow-lg"
              :src="profile"
              alt="Perfil"
            />
            <h2>{{ esporte.local }}</h2>
            <label for="">{{ esporte.rua }}, {{ esporte.bairro }}</label>

            <div class="text-center">
              <v-rating v-model="esporte.id" :max="5"></v-rating>
            </div>
          </InertiaLink>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
