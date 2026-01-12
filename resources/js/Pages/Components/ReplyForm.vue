<script setup>
import { Form } from '@inertiajs/vue3';
import ImageIcon from './Icons/ImageIcon.vue';
import VideoIcon from './Icons/VideoIcon.vue';

defineProps({
    profile: {
        type: Object,
        required: true,
    },
    post: {
        type: Object,
        required: true,
    },
})

const emit = defineEmits(['success'])
</script>

<template>
    <div class="border-pixl-light/10 bg-pixl-light/3 mt-8 flex items-start gap-4 border-t p-4">
        <a :href="route('profiles.show', profile)" class="shrink-0">
            <img :src="profile.avatar_url" :alt="`Avatar of ${profile.display_name}`" class="size-10 object-cover" />
        </a>
        <Form @success="emit('success')" method="POST"
            :action="route('posts.reply', { profile: post.profile, post: post })" class="grow" reset-on-success
            #default="{ errors }">
            <label for=" content" class="sr-only">Reply body</label>
            <textarea name="content" id="content" :placeholder="`Reply to ${post.profile.display_name}'s post`" rows="5"
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