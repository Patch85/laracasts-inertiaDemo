<script setup>
import Layout from "@/Shared/Layout.vue";
import Pagination from "@/Shared/Pagination.vue";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import debounce from "lodash/debounce";

let props = defineProps({
    can: Object,
    filters: Object,
    users: Object,
});

let search = ref(props.filters.search);

watch(search, debounce(function (value) {
    Inertia.get('/users', { search: value }, {
        preserveState: true,
        replace: true,
    });
}, 250));
</script>

<template>
    <Head title="Users" />

    <Layout>

        <template #title>
            <div class="flex justify-between mb-6">
                <div class="flex items-center">
                    <h1 class="text-bold text-4xl font-bold text-slate-200">Users</h1>

                    <Link href="/users/create"
                          v-if="can.createUser"
                          class="text-sm text-blue-300 ml-4 mt-2">New User</Link>
                </div>

                <input type="text"
                       v-model="search"
                       class="border border-slate-50 focus:border-amber-200 shadow-xs shadow-amber-50 px-2 rounded-lg bg-slate-700 text-slate-200"
                       placeholder="Search..">
            </div>
        </template>

        <template #main>
            <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-300 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <tbody class="bg-slate-700 divide-y divide-gray-300">
                                <tr v-for="user in users.data"
                                    :key="user.id">

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-slate-100">
                                                    {{ user.name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <Link :href="`/users/${user.id}/edit`"
                                        v-if="user.can.edit"
                                              class="text-amber-100 hover:text-amber-300">
                                        Edit
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <Pagination :links="users.links"
                        class="mt-6" />

        </template>
    </Layout>
</template>
