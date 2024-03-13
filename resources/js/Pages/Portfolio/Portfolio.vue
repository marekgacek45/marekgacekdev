<template>
    <section
        class="section lg:min-h-[calc(100vh-371px)] mt-[71px] bg-ownPurple-400"
    >
        <div
            class="flex flex-col flex-start items-center h-full px-6 sm:px-12 md:px-24 lg:px-0 py-24 gap-12"
        >
            <!--BUTTONS-->
            <div class="flex flex-wrap justify-center items-center gap-8">
                <button
                    class="btn box-shadow"
                    :class="
                        selectedCategory === null
                            ? 'bg-ownTurquise-400 hover:bg-ownTurquise-600'
                            : 'bg-ownYellow-400 hover:bg-ownYellow-600'
                    "
                    @click="setCategory(null)"
                >
                    ALL
                </button>
                <button
                    v-for="category in categories"
                    :key="category.id"
                    class="btn box-shadow"
                    @click="setCategory(category.name)"
                    :class="
                        selectedCategory === category.name
                            ? 'bg-ownTurquise-400 hover:bg-ownTurquise-600'
                            : 'bg-ownYellow-400 hover:bg-ownYellow-600'
                    "
                >
                    {{ category.name }}
                </button>
            </div>
            <!--PROJECTS-->
            <transition-group
                name="list"
                tag="div"
                class="flex w-full flex-wrap gap-8 justify-center"
            >
                <OldSchoolCard
                    v-for="project in filteredProjects"
                    :key="project.id"
                    :title="project.title"
                    customClass=" w-full lg:w-1/3 2xl:w-1/4"
                    class="project hover:animate-shake cursor-pointer"
                    @click="openModal(project)"
                >
                    <img
                        :src="'/storage/' + project.image"
                        alt="miniaturka projektu"
                        class="max-h-[300px] w-full h-full object-cover"
                    />
                    <div
                        v-for="category in project.categories"
                        :key="category.id"
                    ></div>
                </OldSchoolCard>
            </transition-group>
        </div>
        <!--MODAL-->
        <v-if isModalOpen>
            <ModalProject
                :activeProject="activeProject"
                :isModalOpen="isModalOpen"
                @update:isModalOpen="isModalOpen = $event"
            />
        </v-if>
    </section>
</template>

<script setup>
import OldSchoolCard from "@/Components/OldSchoolCard.vue";
import ModalProject from "@/Components/ModalProject.vue";

import { ref, computed } from "vue";

const props = defineProps({
    projects: Array,
    categories: Array,
});

let projects = ref([...props.projects]);
let selectedCategory = ref(null);
let activeProject = ref(null);

const filteredProjects = computed(() => {
    if (selectedCategory.value === null) {
        return projects.value;
    }
    return projects.value.filter((project) =>
        project.categories.some(
            (category) => category.name === selectedCategory.value
        )
    );
});

const setCategory = (category) => {
    selectedCategory.value = category;
};

let isModalOpen = ref(false);

const openModal = (project) => {
    activeProject.value = project;
    isModalOpen.value = true;

    console.log("open modal");
    console.log(activeProject.value);
};
</script>

<style scoped>
.btn {
    @apply px-10 py-4    text-xl font-text font-bold hover:animate-shake duration-300;
}

.list-enter-active,
.list-leave-active {
    transition: all 1s ease-in-out;
}
.list-enter-from,
.list-leave-to {
    opacity: 0;
    transform: rotate(0deg) scale(0);
}
.list-enter-to,
.list-leave-from {
    opacity: 1;
    transform: rotate(360deg) scale(1);
}
</style>
