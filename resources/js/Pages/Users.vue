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
        
            <ul class="mt-6 ml-4">
                <li v-for="user in users"
                    :key="user.id"
                    v-text="user.name"
                    class="text-md text-slate-200"></li>
            </ul>
        </template>
    </Layout>
</template>
