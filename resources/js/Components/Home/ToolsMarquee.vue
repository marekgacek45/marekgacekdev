

<script setup>
import { Vue3Marquee } from "vue3-marquee";

 const props = defineProps({
tools:Object
})



</script>

<template>
     <Vue3Marquee :clone="true" :duration="20" class=" p-6   overflow-hidden ">
            
            <img
                v-for="tool in tools"
                :key="tool.id"
                :src="'/storage/' + tool.logo"
                class="w-8 mx-6"
                :alt="'logo' + tool.name"
                loading="lazy"
                width="30"
                height="30"
            />
        </Vue3Marquee>
</template>

