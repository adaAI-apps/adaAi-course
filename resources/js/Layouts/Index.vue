<template>
    <Header />
    <div class="py-20">
        <slot />
    </div>
    <Footer />
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import Header from "../Organisms/Header.vue";
import Footer from "../Organisms/Footer.vue";

const page = usePage();

const user = computed(() => page.props.auth.user);
const appName = computed(() => page.props.app.name);
</script>
