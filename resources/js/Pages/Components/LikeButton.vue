<script setup>
import { Form } from '@inertiajs/vue3';
import HeartIcon from './Icons/HeartIcon.vue';

defineProps({
    post: { type: Object, required: true },
})
</script>

<template>
    <Form method="POST" :action="route(post.has_liked ? 'posts.unlike' : 'posts.like', [post.profile, post])">
        <div class="flex items-center gap-1">
            <button aria-label="Like" :class="post.has_liked ? 'hover:text-pixl text-pixl' : ''">
                <HeartIcon />
            </button>
            <span :class="post.has_liked ? 'hover:text-pixl text-pixl' : ''" class="text-sm">{{ post.likes_count
                }}</span>
        </div>
    </Form>
</template>