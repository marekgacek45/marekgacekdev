<template>
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4">


<PostCard v-for="(post,index) in posts" :key="post.id" :thumbnail="post.thumbnail" :title="post.title" :index="index"/>
</div>
</template>


<script setup>

import PostCard from '../PostCard.vue';

defineProps({
    posts:Array
})

</script>