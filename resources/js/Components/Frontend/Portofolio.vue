<script setup>
import Projects from "@/Components/Frontend/Projects.vue"
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
    <section
        id="portofolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My lates work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Mollitia esse omnis minus non itaque suscipit totam et
                    consectetur dolor nostrum.
                </p>
            </div>
            <Projects :skills="skills" :projects="projects"></Projects>
        </div>
    </section>
</template>
