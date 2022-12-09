<script setup>
defineProps({
    name: String,
    frameworks: Array
})
</script>

<template>
    <h1 class="text-bold text-5xl">Hello, {{ name }}!</h1>

    <p class="text-sm my-2">In this series, the following frameworks will be used:</p>

    <ul class="list">
        <li
            class="list-item"
            v-for="framework in frameworks"
            v-text="framework"
        ></li>
    </ul>
</template>
