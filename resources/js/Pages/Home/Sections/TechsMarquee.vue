<template>
     <Vue3Marquee :clone="true" :duration="10" class="bg-bgLight-200 p-4  overflow-hidden">
            
            <img
                v-for="tool in tools"
                :key="tool.id"
                :src="toolLogo(tool)"
                class="w-20 mx-12"
            />
        </Vue3Marquee>
</template>

<script setup>
import { Vue3Marquee } from "vue3-marquee";
import { computed } from "vue";




 const props = defineProps({
tools:Object
})

const toolLogo = (tool) => `/storage/${tool.logo}`;

</script>