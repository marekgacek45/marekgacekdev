<script setup>
import PrimaryButton from "@/Components/Base/PrimaryButton.vue";
import BlogSection from "@/Components/Home/BlogSection.vue";

defineProps({
    posts: Array,
});


import { useGlobalMotion } from "@/motionSetup.js"

const { fromBottom } = useGlobalMotion();
</script>

<template>
    <section class="bg-bgDark-400 section py-16 lg:py-24">
        <!--HEADING-->
        <div ref="fromBottom"
            
            class="max-w-screen-2xl mx-auto text-center px-4 sm:px-12 md:px-24 lg:px-12 2xl:px-24"
        >
            <h2
                class="text-4xl xs:text-5xl lg:text-6xl xl:text-7xl mb-24 uppercase font-heading text-fontLight"
            >
                Zanurz sie w lekturze i odkryj ciekawostki z programistycznego
                swiata
            </h2>
        </div>
      
        <div
            class="flex flex-col justify-center items-center gap-12 md:gap-16 px-4 sm:px-0"
        >
         

            <BlogSection :posts="posts"/>

           
           <Button :href="route('blog')" aria-label="zobacz wszystkie wpisy"
                    >Zobacz wszytkie wpisy</Button
                >
        </div>
    </section>
</template>
