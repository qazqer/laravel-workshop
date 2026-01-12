<script setup lang="ts">
import Layout from '../Layouts/Layout.vue';

defineProps({
    greeting: String
})
</script>

<template>
    <Layout>
        <div class="flex-1">{{ greeting }}, Here is the welcome page.</div>
    </Layout>
</template>