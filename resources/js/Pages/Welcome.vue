<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portofolio from "@/Components/Frontend/Portofolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";

const props = defineProps({
    skills: {
        type: Object,
        default: () => ({}),
    },
    projects: {
        type: Object,
        default: () => ({}),
    },
});
</script>

<template>
    <Head title="Welcome to portofolio" />
    <FrontendLayout>
        <!-- Hero Primary -->
        <Hero></Hero>
        <!-- Promote tail-100 -->
        <Promote></Promote>
        <!-- About section-->
        <About></About>

        <!-- Skills tail-100 -->
        <Skills :skills="skills"></Skills>

        <!-- Portofolio primary -->
        <Portofolio :skills="skills" :projects="projects"></Portofolio>
        <!-- Service secondary -->
        <Services></Services>
        
        <!-- Contact primary -->
        <ContactMe></ContactMe>
    </FrontendLayout>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
