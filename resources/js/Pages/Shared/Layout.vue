<script setup>
import Nav from './Nav.vue';
</script>

<template>

  <section class="border-b pb-2 border-slate-300">

    <header class="flex justify-between">

      <h1 class="font-bold text-lg text-slate-300">InertiaDemo App</h1>

      <Nav />
    </header>
  </section>

  <section class="p-6">
    <slot name="title" />
  </section>

</template>