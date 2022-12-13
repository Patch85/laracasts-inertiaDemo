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

    <p class="text-sm text-slate-200 font-semibold">Welcome back, {{ $page.props.auth.user.username }}</p>
  </section>

</template>