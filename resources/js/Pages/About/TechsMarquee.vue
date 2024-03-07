<template>
     <Vue3Marquee :clone="true" :duration="10" class="bg-bgLight-200 p-4  overflow-hidden">
            
            <img
                v-for="technology in technologies"
                :key="technology.id"
                :src="technology.logo"
                class="w-20 mx-12"
            />
        </Vue3Marquee>
</template>nology

<script setup>
import { Vue3Marquee } from "vue3-marquee";
import { computed } from "vue";




 const props = defineProps({
technologies:Array
})


console.log(props.technologies);
</script>