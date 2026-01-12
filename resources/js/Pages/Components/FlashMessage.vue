<script setup>
import { usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

let flashMessage = ref('');
let show = ref(false);

watch(
    () => usePage().props.flash.success,
    (flash) => {
        flashMessage.value = flash;
        show.value = true;

        setTimeout(() => {
            show.value = false;
        }, 3000);
    },
);
</script>

<template>
    <Transition
        enter-active-class="transition ease-out duration-300"
        leave-active-class="transition ease-in duration-300"
        enter-from-class="opacity-0"
        leave-to-class="opacity-0"
    >
        <div
            v-if="flashMessage && show"
            class="fixed bottom-4 right-4 z-50 w-fit rounded bg-pixl py-2 px-3 text-white"
            v-text="flashMessage"
        ></div>
    </Transition>
</template>
