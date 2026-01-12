<script setup>
import ImageIcon from './Icons/ImageIcon.vue';
import VideoIcon from './Icons/VideoIcon.vue';
import { Form } from '@inertiajs/vue3';

defineProps({
    profile: Object
})
</script>

<template>
    <div class="border-pixl-light/10 mt-8 flex items-start gap-4 border-b pb-4">
        <a :href="route('profiles.show', profile)" class="shrink-0">
            <img :src="profile.avatar_url" :alt="`Avatar of ${profile.display_name}`" class="size-10 object-cover" />
        </a>
        <Form :action="route('posts.store')" method="POST" class="grow" reset-on-success #default="{ errors }">
            <label for="content" class="sr-only">Post body</label>
            <textarea name="content" id="content" :placeholder="`What's up ${profile.handle}?`"
                class="w-full resize-none text-lg"></textarea>
            <div v-if="errors.content" class="text-red-500 mb-2 text-sm" v-text="errors.content" />
            <div class="flex items-center justify-between gap-4">
                <div class="flex gap-4">
                    <button type="button">
                        <ImageIcon />
                    </button>
                    <button type="button">
                        <VideoIcon />
                    </button>
                </div>
                <button type="submit"
                    class="bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-4 py-1 text-sm">
                    Post
                </button>
            </div>
        </Form>
    </div>
</template>