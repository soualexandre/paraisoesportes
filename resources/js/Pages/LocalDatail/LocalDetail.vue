<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import profile from "@/images/corrida.png";

defineProps({
  esporteDetail: Object,
});
</script>



<template>
  <Head title="Paraíso Esportes" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalhes do local
      </h2>
    </template>
    <div class="flex max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-8">
      <div class="">
        <div
          class="w-full mt-8 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        >
          <div class="flex justify-end px-4 pt-4">
            <!-- Dropdown menu -->
          </div>
          <div class="flex flex-col items-center pb-4">
            <img
              class="w-24 h-24 mb-3 rounded-full shadow-lg"
              :src="profile"
              alt="Perfil"
            />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
              {{ esporteDetail.esportes }}
            </h5>
            <span class="text-sm text-gray-500 dark:text-gray-400"
              >{{ esporteDetail.rua }}, {{ esporteDetail.bairro }}</span
            >
          </div>
          <div class="flex flex-col px-4 pl-10 pb-4">
            <div class="mb-2">
              <span class="mb-2">Complemeto: </span>
              <label for="" class="text-gray-500">
                {{ esporteDetail.complemento }}
              </label>
            </div>
            <div class="mb-2">
              <span class="">Descrição: </span>
              <label for="" class="text-gray-500">
                {{ esporteDetail.descricao }}
              </label>
            </div>
          </div>
        </div>
      </div>

      <div
        class="w-full mt-8 max-w-ls bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
      >
        <div class="p-8 text-lg text-bold">
          <h2>Ainda nâo há avaliações para esse local!</h2>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
