<script setup>

import Nav from "@/Pages/Shared/Nav.vue"

defineProps({
    name: String,
})
</script>

<template>
    <h1 class="text-bold text-4xl font-bold">Home</h1>

    <Nav />
</template>