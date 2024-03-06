<template>
    <OldSchoolCard title="Opinie">
        <div
            class="flex flex-col justify-center items-center gap-6 py-6 px-6 bg-bgLight-200"
        >
            <div
                class="flex flex-col justify-center items-center gap-6 text-center"
            >
                <a :href="currentLink" target="_blank" key="currentLink">
                    <img
                        :src="currentLogo"
                        alt="logo firmy od której dostałem pozytywny komentarz"
                        class="w-30 h-20"
                        key="currentLogo"
                    />
                </a>
                <div
                    class="flex justify-center items-center font-textArch text-xl min-h-[140px] md:min-h-[175px] 2xl:min-h-[145px] md:px-12 lg:px-0"
                    key="currentBody"
                >
                    <p>
                        {{ currentBody }}
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

<script setup>
import { ref, computed, onMounted, onUnmounted, defineProps } from "vue";
import OldSchoolCard from "../OldSchoolCard.vue";

const props = defineProps({
    comments: Array,
});

console.log(props.comments);

const comments = ref([]);
const currentIndex = ref(0);

const currentLogo = computed(() => {
    if (comments.value.length > 0) {
        return comments.value[currentIndex.value].logo;
    }
    return null;
});

const currentLink = computed(() => {
    if (comments.value.length > 0) {
        return comments.value[currentIndex.value].link;
    }
    return null;
});

const currentBody = computed(() => {
    if (comments.value.length > 0) {
        return comments.value[currentIndex.value].body;
    }
    return null;
});

const nextComment = () => {
    currentIndex.value = (currentIndex.value + 1) % comments.value.length;
    resetInterval();
};

const previousComment = () => {
    currentIndex.value =
        (currentIndex.value - 1 + comments.value.length) %
        comments.value.length;
    resetInterval();
};

let intervalId;

const resetInterval = () => {
    clearInterval(intervalId);
    intervalId = setInterval(nextComment, 5000);
};

onMounted(() => {
    comments.value = props.comments;
    resetInterval();
});

onUnmounted(() => {
    clearInterval(intervalId);
});
</script>
