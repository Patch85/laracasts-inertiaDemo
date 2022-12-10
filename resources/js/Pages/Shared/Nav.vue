<script setup>
import NavLink from '@/Components/NavLink.vue';
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc text-indigo-700">
            <li>
                <NavLink
                    href="/"
                    :active="$page.component === 'Home'"
                >Home</NavLink>
            </li>

            <li>
                <NavLink
                    href="/users"
                    :active="$page.component === 'Users'"
                >Users</NavLink>
            </li>

            <li>
                <NavLink
                    href="/settings"
                    :active="$page.component === 'Settings'"
                >Settings</NavLink>
            </li>

            <li>
                <NavLink
                    href="/loggoutt"
                    method="post"
                    as="button"
                    :data="{ foo: 'bar' }"
                >Log Out</NavLink>
            </li>

        </ul>
    </nav>
</template>