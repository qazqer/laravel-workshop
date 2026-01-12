<script setup lang="ts">
import Navigation from '../Pages/Components/Navigation.vue';
import Aside from '../Pages/Components/Aside.vue';
import FlashMessage from '../Pages/Components/FlashMessage.vue';
</script>

<template>
    <div class="bg-pixl-dark text-pixl-light flex gap-8 px-4 sm:h-dvh sm:overflow-clip xl:gap-16">
        <Navigation />

        <slot />

        <Aside />

        <FlashMessage />
    </div>
</template>