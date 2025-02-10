` `
<template>
    <header class="fixed w-full py-4 bg-white shadow">
        <div class="container mx-auto flex items-center justify-between">
            <!-- left header -->
            <Link href="/" class="flex items-center gap-x-3">
                <div class="w-8 h-8">
                    <img src="/images/logo.png" alt="logo" />
                </div>
                <h4 class="text-lg font-bold">adaAI</h4>
            </Link>

            <!-- right header -->
            <div class="flex items-center gap-x-5 lg:gap-x-8 relative">
                <div class="hidden md:flex items-center gap-x-5 lg:gap-x-8">
                    <Link href="/courses" class="font-semibold"> Courses </Link>
                    <Link href="/articles" class="font-semibold">
                        Articles
                    </Link>
                </div>

                <button class="flex items-center" @click="toggleTheme">
                    <component :is="themeIcon" class="w-6 h-6" />
                </button>

                <div v-if="!user">
                    <a href="/auth/google/redirect">
                        <button
                            class="flex items-center gap-x-2 px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-md"
                        >
                            <RiLoginCircleLine />
                            <p class="hidden md:inline">Login</p>
                        </button>
                    </a>
                </div>

                <div v-else class="">
                    <button class="flex items-center gap-x-2">
                        <div class="w-7 h-7 rounded-full overflow-hidden">
                            <img :src="user.avatar" alt="avatar" />
                        </div>
                    </button>
                </div>

                <div
                    v-if="user"
                    class="absolute w-36 md:w-44 p-4 container rounded-md top-11 right-1 shadow bg-white"
                ></div>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import {
    RiLoginCircleLine,
    RiLogoutCircleLine,
    RiMoonLine,
    RiSunLine,
    RiVipCrownLine,
} from "@remixicon/vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
const user = computed(() => page.props.auth.user);
const theme = ref(localStorage.getItem("theme") || "light");
const themeIcon = computed(() =>
    theme.value === "light" ? RiMoonLine : RiSunLine
);

const toggleTheme = () => {
    theme.value = theme.value === "light" ? "dark" : "light";
    localStorage.setItem("theme", theme.value);
    document.documentElement.classList.toggle("dark", theme.value === "dark");
};
</script>
