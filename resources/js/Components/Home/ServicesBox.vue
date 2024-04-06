<script setup>
import OldSchoolCard from "../OldSchoolCard.vue";
import { ref } from "vue";

const props = defineProps({
    services:Array
})

import { useGlobalMotion } from "@/motionSetup.js";

const { fromBottom } = useGlobalMotion();

const currentText = ref(props.services[0]['text']);
const currentImage = ref(props.services[0]['image']);
const currentBackground = ref(props.services[0]['background']);
const isActive = ref(0);

const change = (text, image, background, index) => {
    currentText.value = text;
    currentImage.value = image;
    currentBackground.value = background;
    isActive.value = index;
};
</script>


<template>
    <OldSchoolCard title="uslugi" ref="fromBottom">
        <div class="border-x-2 border-black " :class="currentBackground">
            <img :src="currentImage" alt="" class="w-full h-[400px] sm:h-[450px] " />
            <div class="px-6 py-10 min-h-[420px] xs:min-h-[350px]  sm:min-h-64   2xl:min-h-50 border-t-2 border-fontDark flex justify-center items-center">
                <p class="text-lg test font-medium ">{{ currentText }}</p>
            </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4">
            <button
                type="button" aria-label="usługa"
                v-for="(item, index) in services"
                :key="index"
                class="p-2 border-2 border-r-0 last:border-r-2 border-fontDark font-action font-bold  text-center  button-hover"
                :class="isActive === index ? item.background : 'bg-bgLight-200'"
                @click="change(item.text, item.image, item.background, index)"
            >
                {{ item.label }}
            </button>
        </div>
    </OldSchoolCard>
</template>


