<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';


const form = useForm({
    esporte: '',
    rua: '',
    bairro: '',
    complemento: '',
    descricao: '',
});


const submit = () => {
    form.post(route('create-sport'), {
        onFinish: () => form.reset('password'),
    });
};

</script>



<template>
    <Head title="Paraíso Esportes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Adicionar Local de esporte</h2>
        </template>

        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
            <form @submit.prevent="submit">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escolha um esporte</label>
                    <select id="countries" v-model="form.esporte" class="bg-gray-50 mb-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" required>
                        <option selected>Escolha uma opção</option>
                        <option value="Futebol">Futebol</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Corrida">Corrida</option>
                        <option value="Musculaçao">Musculaçao</option>
                        <option value="Trilha">Trilha</option>
                    </select>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rua</label>
                        <input type="text" v-model="form.rua" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Ex: Rua Bom Jesus" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
                        <input type="text" id="last_name" v-model="form.bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Ex: Centro" required>
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complemento</label>
                    <input type="text" v-model="form.complemento" class="bg-gray-50 mb-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" >
                </div>

                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição do local</label>
                    <textarea id="message" rows="4" v-model="form.descricao" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descreva o local" required></textarea>
                </div>

                <div class="text-center">
                    <button type="sumit" class="text-white mt-6 w-full flex itemns-center justify-center text-center bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2" >
                        Adicionar Esporte
                    </button>
                </div>
            </form>
            </div>
    </AuthenticatedLayout>
</template>
