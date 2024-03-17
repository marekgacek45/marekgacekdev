<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";

</script>



<template>
     <div class="lg:col-span-2 flex flex-col justify-start items-start gap-3 group">
            <!--POST CARD-->
            <div class="w-full max-h-[500px] overflow-hidden">
                <img
                    src="/assets/images/2.jpg"
                    alt=""
                    class="w-full h-full object-cover group-hover:scale-110 duration-300"
                />
            </div>
            <TagBox>Laravel</TagBox>
            <h2 class="text-3xl sm:text-5xl uppercase font-heading">
                Vote For The Greatest Game Of All Time In Our Bracket Tournament
                | Round 3
            </h2>
        </div>
</template>