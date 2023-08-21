<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    project: {
        type: Object,
        default: () => ({}),
    },
});
</script>

<template>
    <Link
        :href="project.project_url"
        class="group flex flex-col items-center text-center cursor-pointer"
    >
        <div class="mb-6">
            <img
                :src="project.image"
                :alt="project.name"
                class="rounded-2xl h-56"
            />
        </div>
        <span
            class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3"
        >
            {{ project.skill_id }}
        </span>
        <h3
            class="group-hover:text-light-tail-500 text-2xl font-semibold capitalize mb-3"
        >
            {{ project.name }}
        </h3>
    </Link>
</template>
