<script setup>

import BlogSection from "@/Components/Home/BlogSection.vue";

defineProps({
    posts: Array,
});


import { useGlobalMotion } from "@/motionSetup.js"

const { fromBottom } = useGlobalMotion();
</script>

<template>
    <section class="bg-bgLight-400 pt-12 pb-24 lg:py-24">
        <!--HEADING-->
        <div ref="fromBottom"
            
            class="max-w-screen-2xl mx-auto text-center px-4 sm:px-12 md:px-24 lg:px-12 2xl:px-24"
        >
            <Heading 
            >
                Zanurz sie w lekturze i odkryj ciekawostki z cyber
                swiata
            </Heading>
        </div>
      
        <div
            class="flex flex-col justify-center items-center gap-12 md:gap-16 px-4 sm:px-0 mt-12"
        >
         

            <BlogSection :posts="posts"/>

           
           <Button :href="route('blog')" aria-label="zobacz wszystkie wpisy"
                    >Zobacz wszytkie wpisy</Button
                >
        </div>
    </section>
</template>
