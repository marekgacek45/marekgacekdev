<template>
    <transition name="modal-fade">
        <div
            v-if="isModalOpen"
            class="fixed inset-0 flex justify-center items-center px-6 sm:px-12 2xl:px-0 pb-12 pt-32 lg:pt-0 bg-bgDark-400 bg-opacity-50"
            :class="classes"
            @click="closeModal"
        >
            <div class="bg-bgLight-200">
                <OldSchoolCard
                    :title="activeProject.title"
                    class="max-w-screen-xl min-w-[60vw] "
                >
                    <div
                        class="flex flex-col lg:flex-row p-8 gap-12 max-h-[80vh]  overflow-y-auto"
                    >
                        <div class="lg:w-1/2 h-[400px] max-h-[400px]">
                            <iframe
                                v-if="activeProject.youtube_link"
                                
                                width="560"
                                height="315"
                                :src="activeProject.youtube_link"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                class="min-h-[300px] w-full h-full"
                            ></iframe>
                            <img
                                v-else
                                :src="'/storage/' + activeProject.image"
                                alt="miniatuka projektu"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div
                            class="lg:w-1/2 flex flex-col gap-6 lg:overflow-y-auto max-h-[400px] "
                        >
                            <a
                                :href="activeProject.site_link"
                                target="blank"
                                class="font-heading text-4xl"
                            >
                                {{ activeProject.title }}
                            </a>

                            <p class="font-text" v-html="activeProject.description"></p>
                          

                            <div>
                                <span class="font-heading text-2xl"
                                    >Wykorzystane technologie</span
                                >
                                <div
                                    class="flex justify-start items-center gap-3 mt-2 mb-12"
                                >
                                    <img
                                        v-for="tool in activeProject.tools"
                                        :key="tool.id"
                                        :src="'/storage/' + tool.logo"
                                        :alt="tool.name"
                                        class="w-10"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </OldSchoolCard>
            </div>
        </div>
    </transition>
</template>

<script setup>
import OldSchoolCard from "./OldSchoolCard.vue";

const props = defineProps({
    activeProject: Object,
    isModalOpen: Boolean,
    closeModal: Function,
});

const emit = defineEmits(["update:isModalOpen"]);

const closeModal = () => {
    emit("update:isModalOpen", false);
};
</script>

<style scoped>
.modal-fade-enter-from,
.modal-fade-leave-to {
    opacity: 0;
    transform: scale(0.3);
}

.modal-fade-enter-to,
.modal-fade-leave-from {
    opacity: 1;
    transform: scale(1) rotate(0);
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity 1s ease,
        transform 2s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}
</style>
