<script setup>
const props = defineProps({
    bgColor: String,
});

const bgColor= "bg-" + props.bgColor
</script>

<template>
    <div class="p-1 px-2 font-text font-bold " :class="bgColor" >
        <slot></slot>
    </div>
</template>
