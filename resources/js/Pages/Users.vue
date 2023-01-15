<script>
import Layout from "./Shared/Layout.vue";

export default { Layout, };
</script>

<script setup>
defineProps({ users: Array })
</script>

<template>

    <Head title="Users" />

    <Layout>
        <template #title>
            <h1 class="text-bold text-4xl font-bold text-slate-200">Users</h1>
        </template>
        <template #main>
            <table class="mt-6 ml-4">
                <tr v-for="user in users"
                    class="text-md text-slate-200">
                    <td v-text="user.name" />
                    <td>edit</td>
                </tr>
            </table>
        </template>
    </Layout>
</template>
