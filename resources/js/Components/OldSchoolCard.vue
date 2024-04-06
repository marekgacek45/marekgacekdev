<template>
    <div class="box-shadow " :class="customClass">
        <div class="bg-bgDark-400 p-2">
            <span
                class=" text-xl font-action font-bold  text-fontLight uppercase "
                >{{ title }}</span
            >
        </div>
        <slot></slot>
      
    </div>
</template>

<script setup>

defineProps({
    title:String,
    customClass:String
})



</script>