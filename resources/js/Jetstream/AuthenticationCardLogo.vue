<template>
    <Link :href="'/'">
        <img src="/logo.webp" class="w-20 h-20" />
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Link,
        },
    }
</script>
