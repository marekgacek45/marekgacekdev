<script setup>
import OldSchoolCard from "../OldSchoolCard.vue";
import { ref } from "vue";

const props = defineProps({
    services:Array
})

import { useGlobalMotion } from "@/motionSetup.js";

const { imgBottom } = useGlobalMotion();

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
    <OldSchoolCard title="usługi" ref="imgBottom">
        <div class="border-x-2 border-black " :class="currentBackground">
            <img :src="currentImage" alt="" class="w-full h-[450px] " />
            <div class="px-6 py-10  min-h-64 md:min-h-56 lg:min-h-64 xl:min-h-56 2xl:min-h-50 border-t-2 border-fontDark">
                <p class="text-lg font-text font-medium ">{{ currentText }}</p>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <button
                type="button" aria-label="usługa"
                v-for="(item, index) in services"
                :key="index"
                class="p-2 border-2 border-r-0 last:border-r-2 border-fontDark font-text font-bold  text-center  button-hover"
                :class="isActive === index ? item.background : 'bg-bgLight-200'"
                @click="change(item.text, item.image, item.background, index)"
            >
                {{ item.label }}
            </button>
        </div>
    </OldSchoolCard>
</template>


