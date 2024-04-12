<script setup>

import PostCard from '@/Components/PostCard.vue';

defineProps({
    posts:Array
})

import { useGlobalMotion } from "@/motionSetup.js"

const { imgBottom } = useGlobalMotion();

</script>


<template>
      <div ref="imgBottom" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4">

<PostCard v-for="(post,index) in posts" :key="post.id" :thumbnail="post.thumbnail" :title="post.title"  :index="index " :post="post"/>

</div>
</template>


