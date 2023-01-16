<script setup>
defineProps({ links: Array });
</script>

<template>
    <div>
        <Component v-for="link in links"
                   :is="link.url ? 'Link' : 'span'"
                   :href="link.url"
                   v-html="link.label"
                   class="text-md  px-1"
                   :class="{ 'text-amber-200 hover:text-amber-400': link.url, 'text-slate-200': !link.url, 'font-bold text-lg': link.active }" />
    </div>
</template>
