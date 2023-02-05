<script setup>
import { Inertia } from '@inertiajs/inertia';
import Layout from '@/Shared/Layout.vue';
import { reactive } from 'vue';

defineProps({
    errors: Object,
});

let form = reactive({
    name: '',
    email: '',
    password: '',
});

let submit = () => Inertia.post('/users', form);

</script>

<template>

    <Head title="Create User" />

    <Layout>

        <template #title>
            <div class="flex justify-between mb-6">
                <h1 class="text-bold text-4xl font-bold text-slate-200">Create New User</h1>
            </div>
        </template>

        <template #main>

            <form @submit.prevent="submit"
                  class="max-w-md mt-8 mx-auto">

                <div class="mb-6">
                    <label for="name"
                           class="block mb-2 uppercase font-bold text-xs text-slate-200">Name</label>

                    <input type="text"
                           name="name"
                           v-model="form.name"
                           id="name"
                           class="border border-slate-50 focus:border-amber-200 shadow-xs shadow-amber-50 p-2 rounded-lg bg-slate-700 text-slate-200 w-full"
                           required>

                    <div v-if="errors.name"
                         v-text="errors.name"
                         class="text-sm text-red-500 italic mt-1">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="email"
                           class="block mb-2 uppercase font-bold text-xs text-slate-200">Email</label>

                    <input type="email"
                           name="email"
                           v-model="form.email"
                           id="email"
                           class="border border-slate-50 focus:border-amber-200 shadow-xs shadow-amber-50 p-2 rounded-lg bg-slate-700 text-slate-200 w-full"
                           required>

                    <div v-if="errors.email"
                         v-text="errors.email"
                         class="text-sm text-red-500 italic mt-1"></div>
                </div>

                <div class="mb-6">
                    <label for="password"
                           class="block mb-2 uppercase font-bold text-xs text-slate-200">Password</label>

                    <input type="password"
                           name="password"
                           v-model="form.password"
                           id="password"
                           class="border border-slate-50 focus:border-amber-200 shadow-xs shadow-amber-50 p-2 rounded-lg bg-slate-700 text-slate-200 w-full"
                           required>

                    <div v-if="errors.password"
                         v-text="errors.password"
                         class="text-sm text-red-500 italic mt-1">
                    </div>
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-green-200 hover:bg-green-800 text-slate-700 hover:text-slate-200 border border-slate-200 rounded p-2">
                        Submit
                    </button>
                </div>
            </form>
        </template>
    </Layout>
</template>
