<script setup>
import Project from "@/Components/Frontend/Project.vue";
import { ref } from "vue";
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

const filteredProjects = ref(props.projects.data);

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data;
    } else {
        filterProjects.value = props.projects.data.filter((project) => {
            return project.skill.id === id;
        });
    }
};
</script>

<template>
    <div class="container mx-auto">
        <nav
            class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-nav-100"
        >
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button
                        @click="filterProjects('all')"
                        class="flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-nav-100"
                    >
                        All
                    </button>
                </li>
                <li
                    v-for="projectSkill in skills.data"
                    :key="projectSkill.id"
                    class="cursor-pointer capitalize m-4"
                >
                    <button
                        @click="filterProjects(projectSkill.id)"
                        class="flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-nav-100"
                    >
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>

        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
            ></Project>
        </section>
    </div>
</template>
