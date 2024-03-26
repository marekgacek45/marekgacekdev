<script setup>
const props = defineProps({
    bgColor: String,
});

const bgColors = {
    vue: "bg-vue",
    laravel: "bg-laravel"
};

let bgColor = bgColors[props.bgColor] || "bg-ownPurple-400";
</script>
<template>
    <div class="p-1 px-2 font-text font-bold" :class="bgColor">
        <slot></slot>
    </div>
</template>
