<template>
     <Vue3Marquee :clone="true" :duration="20" class="bg-bgDark-400 p-1   overflow-hidden ">
            
            <img
                v-for="tool in tools"
                :key="tool.id"
                :src="toolLogo(tool)"
                class="w-6 mx-6"
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