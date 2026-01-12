<script setup>
import Layout from '@/Layouts/Layout.vue';
import Post from '../Components/Post.vue';
import ProfileHeader from '../Components/ProfileHeader.vue';
import BackIcon from '../Components/Icons/BackIcon.vue';
import AppFooter from '../Components/AppFooter.vue';


defineProps({
    profile: {
        type: Object,
        required: true,
    },
    posts: {
        type: Array,
        required: true,
    },
})
</script>

<template>
    <Layout>
        <!-- Content -->
        <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
            <!-- Back button -->
            <a :href="route('posts.index')" class="group flex items-baseline gap-1.5">
                <BackIcon />
                <span>back</span>
            </a>

            <ProfileHeader :profile="profile" />

            <!-- Feed -->
            <ol class="border-pixl-light/10 border-t pt-4">
                <Post v-for="post in posts" :key="post.id" :post="post" :show-engagement="true" />
            </ol>

            <AppFooter />
        </main>
    </Layout>
</template>