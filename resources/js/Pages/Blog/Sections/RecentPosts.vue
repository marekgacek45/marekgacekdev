<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";
import RecentPostCard from "@/Components/Blog/RecentPostCard.vue";
import MainRecentPostCard from "@/Components/Blog/MainRecentPostCard.vue";

const props = defineProps({
    posts: Object,
});

const latestRecentPost = props.posts[0];
const otherRecentPosts = props.posts.slice(1, 4);
const otherPost = props.posts.slice(4);
</script>

<template>
    <div class="grid lg:grid-cols-3 gap-x-12 2xl:gap-x-24 mt-16">
        <!--MAIN-->
        <MainRecentPostCard :post="latestRecentPost" />
        <!--OTHER POST-->
        <div
            class="col-span-1 flex flex-col gap-6 lg:gap-0 lg:justify-between mt-12 lg:mt-0"
        >
            <RecentPostCard
                v-for="post in otherRecentPosts"
                :post="post"
                :key="post.id"
            />

          
        </div>
    </div>
</template>
