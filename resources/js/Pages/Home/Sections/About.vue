<script setup>
import TechsMarquee from "@/Pages/Home/Sections/TechsMarquee.vue";

import { useGlobalMotion } from "@/motionSetup.js";

const { textRight, textLeft, imgBottom } = useGlobalMotion();

defineProps({
    tools: Object,
});
</script>

<template>
    <!-- <section
        class="section lg:h-[calc(100vh-71px)]  mt-[71px] bg-ownOrange-600"
    > -->
    <section class="bg-bgLight-400 section py-4">
        <!-- CONTAINER---->
        <div class="wrapper relative">
            <!-- TEXT---->
            <div
                ref="textLeft"
                class="flex flex-col justify-center gap-6 lg:w-1/2 lg:mr-3"
            >
                <Heading>Czesc, mam na imie Marek</Heading>
                <h3
                    class="text-2xl md:text-3xl xl:text-3xl font-text leading-relaxed text-fontDark"
                >
                    Jestem
                    <span class="font-heading text-ownYellow-400"
                        >WebDeveloperem</span
                    >, który z pasją tworzy strony internetowe.
                </h3>
                <h3
                    class="text-2xl md:text-3xl xl:text-3xl font-text leading-relaxed text-fontDark"
                >
                    Walczę na całej powierzchni programistycznego pola,
                    wykorzystując
                    <span class="font-heading text-ownYellow-400 text-"
                        >PHP</span
                    >
                    i
                    <span class="font-heading text-ownYellow-400"
                        >JavaScript</span
                    >
                    jako swoje oręża.
                </h3>
                <div class="flex justify-center ">
           <TechsMarquee :tools="tools"/>
        </div>
            </div>
            <!-- IMAGE---->
            <div
                ref="imgBottom"
                class="flex justify-center items-center h-96 lg:h-auto mt-6 mb-12 lg:w-1/2 lg:py-16 lg:px-4 xl:p-10 2xl:p-20"
            >
                <div class="flex flex-col relative">
                    <img
                        src="/assets/images/about/about.webp"
                        alt="zdjęcie przedstawiające mój wizerunek"
                        class="h-full object-cover box-shadow"
                        loading="lazy"
                    />
                </div>
            </div>
        </div>
    </section>
    
</template>
