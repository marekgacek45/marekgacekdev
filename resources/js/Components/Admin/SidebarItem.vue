<template>
    <li class="text-2xl font-text font-bold border border-transparent hover:border-ownYellow-400 hover:bg-ownYellow-400  py-3 duration-300 px-4"><Link :href="href" class="flex justify-start items-center gap-2"><slot></slot></Link></li>
</template>

<script setup>

defineProps({
    href:String
})
</script>