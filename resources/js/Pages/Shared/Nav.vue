<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Link
                    href="/"
                    class="text-blue-500 hover:underline"
                >Home</Link>
            </li>

            <li>
                <Link
                    href="/users"
                    class="text-blue-500 hover:underline"
                >Users</Link>
            </li>

            <li>
                <Link
                    href="/settings"
                    class="text-blue-500 hover:underline"
                >Settings</Link>
            </li>

            <li>
                <Link
                    href="/loggoutt"
                    method="post"
                    class="text-blue-500 hover:underline"
                    as="button"
                    :data="{ foo: 'bar' }"
                >Log Out</Link>
            </li>

        </ul>
    </nav>
</template>