<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "./Shared/Layout.vue";
defineProps({
    time: String
})
</script>

<template>
    <Layout>
        <template #title>
            <h1 class="text-bold text-4xl font-bold text-slate-200">Users</h1>
        </template>
    </Layout>


    <div
        style="margin-top: 1400px"
        class="text-slate-200"
    >
        <p>The current time is {{ time }}</p>
        <Link
            href="/users"
            class="text-blue-500"
            preserve-scroll
        >Refresh</Link>
    </div>
</template>
