<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";
import OldSchoolCard from "../OldSchoolCard.vue";

const props = defineProps({
    testimonials: Array,
});

import { useGlobalMotion } from "@/motionSetup.js";

const { imgBottom } = useGlobalMotion();

const testimonials = ref([]);
const currentIndex = ref(0);

const currentLogo = computed(() => {
    if (testimonials.value.length > 0) {
        const path = 'storage/' + testimonials.value[currentIndex.value].logo
       
        return path
    }
    return null;
});

const currentLink = computed(() => {
    if (testimonials.value.length > 0) {
        return testimonials.value[currentIndex.value].link;
    }
    return null;
});

const currentContent = computed(() => {
    if (testimonials.value.length > 0) {
        return testimonials.value[currentIndex.value].content;
    }
    return null;
});

const nextComment = () => {
    currentIndex.value = (currentIndex.value + 1) % testimonials.value.length;
    resetInterval();
};

const previousComment = () => {
    currentIndex.value =
        (currentIndex.value - 1 + testimonials.value.length) %
        testimonials.value.length;
    resetInterval();
};

let intervalId;

const resetInterval = () => {
    clearInterval(intervalId);
    intervalId = setInterval(nextComment, 5000);
};

onMounted(() => {
    testimonials.value = props.testimonials;
    resetInterval();
});

onUnmounted(() => {
    clearInterval(intervalId);
});
</script>


<template>
    <OldSchoolCard title="Opinie" ref="imgBottom">
        <div
            class="flex flex-col justify-center items-center gap-6 py-6 px-6 bg-bgLight-200"
        >
            <div
                class="flex flex-col justify-center items-center gap-6 text-center"
            >
                <a :href="currentLink" target="_blank" key="currentLink">
                    <img
                        :src="currentLogo"
                        alt="logo firmy zadowolonej z moich usług"
                        class="w-30 h-20"
                        key="currentLogo"
                        width="150"
                        height="150"
                    />
                </a>
                <div
                    class="flex justify-center items-center font-textArch text-xl min-h-[140px] md:min-h-[175px] 2xl:min-h-[145px] md:px-12 lg:px-0"
                    key="currentContent"
                >
                    <p>
                        {{ currentContent }}
                    </p>
                </div>
            </div>

            <div class="flex gap-4">
                <button
                    aria-label="poprzedni"
                    class="border-2 border-black bg-ownYellow-400 px-1"
                    @click="previousComment"
                >
                    <img
                        src="/assets/icons/left.svg"
                        alt=""
                        class="w-10 hover:scale-90 duration-300"
                    />
                </button>
                <button
                    aria-label="następny"
                    class="border-2 border-black bg-ownYellow-400 px-1"
                    @click="nextComment"
                >
                    <img
                        src="/assets/icons/right.svg"
                        alt=""
                        class="w-10 hover:scale-90 duration-300"
                    />
                </button>
            </div>
        </div>
    </OldSchoolCard>
</template>

