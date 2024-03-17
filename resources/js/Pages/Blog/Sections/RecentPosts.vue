<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";
import RecentPostCard from "@/Components/Blog/RecentPostCard.vue";
import MainRecentPostCard from "@/Components/Blog/MainRecentPostCard.vue";
</script>

<template>
    <div class="grid lg:grid-cols-3 gap-x-12 2xl:gap-x-24 mt-16">
        <!--MAIN-->
        <MainRecentPostCard />
        <!--OTHER POST-->
        <div
            class="col-span-1 flex flex-col gap-6 lg:gap-0 lg:justify-between mt-12 lg:mt-0"
        >
            <RecentPostCard
                tag="vue"
                title=" Vote For The Greatest Game Of All Time In Our Bracket
                    Tournament"
            />

            <RecentPostCard
                tag="vue"
                title=" Vote For The Greatest Game Of All Time In Our Bracket
                    Tournament"
            />

            <RecentPostCard
                tag="vue"
                title=" Vote For The Greatest Game Of All Time In Our Bracket
                    Tournament"
            />
        </div>
    </div>
</template>
