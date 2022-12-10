<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Nav from "@/Pages/Shared/Nav.vue"

defineProps({
    time: String
})
</script>

<template>
    <h1 class="text-bold text-4xl font-bold">Users</h1>

    <Nav />

    <div style="margin-top: 1400px">
        <p>The current time is {{ time }}</p>
    </div>
    <Link
        href="/users"
        class="text-blue-500"
        preserve-scroll
    >Refresh</Link>
</template>
