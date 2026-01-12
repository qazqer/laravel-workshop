<script setup lang="ts">
import Logo from './Logo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <!-- Navigation -->
    <header
        class="my-4 hidden w-48 shrink-0 flex-col justify-between gap-8 pl-4 sm:flex xl:ml-40"
    >
        <div class="overflow-x-clip overflow-y-auto">
            <!-- Logo -->
            <a href="/">
                <Logo />
            </a>
            <!-- Navigation -->
            <nav class="mt-10">
                <ul class="flex flex-col gap-3.5">
                    <!-- TODO -->
                    <li>
                        <a
                            class="hover:underline"
                            :class="{
                                'text-pixl': $page.component === 'Posts/Index',
                            }"
                            :href="route('posts.index')"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/explore"
                            >Explore</a
                        >
                    </li>
                    <!-- Active item -->
                    <li class="-ml-4 flex items-center gap-2">
                        <div class="bg-pixl size-2 shrink-0"></div>
                        <a
                            class="hover:underline"
                            href="/notifications"
                            >Notifications</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/lists"
                            >Lists</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/bookmarks"
                            >Bookmarks</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/jobs"
                            >Jobs</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/communities"
                            >Communities</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/premium"
                            >Premium</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/profile"
                            >Profile</a
                        >
                    </li>
                    <li>
                        <a
                            class="hover:underline"
                            href="/more"
                            >More</a
                        >
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex flex-col gap-6">
            <Link
                v-show="$page.component !== 'Posts/Index'"
                :href="route('posts.index')"
                class="bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-4 py-3 text-sm text-center"
            >
                Post
            </Link>
            <!-- User controls -->
            <div class="flex gap-3.5">
                <a
                    href="/profile"
                    class="shrink-0"
                >
                    <img
                        :src="$page.props.auth?.user?.profile.avatar_url"
                        :alt="`Avatar of ${$page.props.auth?.user?.profile.display_name}`"
                        class="size-11 object-cover"
                    />
                </a>
                <div class="flex flex-col gap-1 text-sm">
                    <p>{{ $page.props.auth?.user?.profile.display_name }}</p>
                    <p class="text-pixl-light/60">
                        @{{ $page.props.auth?.user?.profile.handle }}
                    </p>
                </div>
                <button
                    class="group flex gap-[3px] py-2"
                    aria-label="Post options"
                >
                    <span
                        class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
                    ></span>
                    <span
                        class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
                    ></span>
                    <span
                        class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
                    ></span>
                </button>
            </div>
        </div>
    </header>
</template>
