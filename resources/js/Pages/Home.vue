<script setup>

import Nav from "@/Pages/Shared/Nav.vue"

defineProps({
    name: String,
})
</script>

<template>
    <h1 class="text-bold text-5xl">Home</h1>

    <Nav />
</template>