<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

import imagelogo from "@/images/esportes.png";
</script>

<template>
  <div
    class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
  >
    <div
      class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
    >
      <div class="flex justify-center mb-6 mt-2 text-center">
        <Link href="/">
          <img :src="imagelogo" width="300" height="100" alt="Logo" />
        </Link>
      </div>
      <slot />
    </div>
  </div>
</template>
