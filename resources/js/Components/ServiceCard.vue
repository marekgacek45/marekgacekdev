<template>
    <div class="w-full pr-8">
        <h2
            
            @click="showParagraph = !showParagraph"
            class=" text-7xl md:text-8xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-heading uppercase cursor-pointer transition-colors ease-in-out duration-1000 p-4 hover:text-ownYellow-400"
            :class="{ 'bg-black text-white  ': showParagraph }"
        >
           {{title}}
        </h2>
        <transition name="list">
            <div
                v-if="showParagraph"
                class="w-full transition-all ease-in-out duration-500 bg-white p-6 font-text text-3xl "
            >
                <slot></slot>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { ref } from "vue";


defineProps({
    title:String,
    
})


let showParagraph = ref(false);
</script>

<style>
.list-enter-active,
.list-leave-active {
    transition: all 1s ease-in-out;
}
.list-enter-from,
.list-leave-to {
    opacity: 0;
    transform: scale(0.5);
}
.list-enter-to,
.list-leave-from {
    opacity: 1;
    transform: scale(1);
}
</style>