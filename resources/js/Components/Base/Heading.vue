<script setup>
import { useGlobalMotion } from "@/motionSetup.js";

const { fromBottom} = useGlobalMotion();
</script>

<template>
    <h2 
        class="text-4xl md:text-5xl xl:text-6xl uppercase font-heading text-fontDark text-center "
    >
        <slot></slot>
    </h2>
</template>
