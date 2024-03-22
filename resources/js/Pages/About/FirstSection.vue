<script setup>
import TechsMarquee from "@/Pages/About/TechsMarquee.vue"

import { useGlobalMotion } from "@/motionSetup.js";

const { textRight, textLeft, imgBottom  } = useGlobalMotion();

defineProps({
    tools:Object
})</script>



<template>
   

<section
        class="section lg:h-[calc(100vh-71px)]  mt-[71px] bg-ownOrange-600"
    >
        <!-- CONTAINER---->
        <div
            class="wrapper"
        >
            <!-- TEXT---->
            <div ref="textLeft"
                class="flex flex-col justify-center gap-6 lg:w-1/2 lg:mr-3 py-12"
            >
            <h1 class="text-7xl  font-heading text-ownPurple-400">
            Cześć, mam na imię Marek
        </h1>
        <h2 
        class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
        >
        Jestem <span class="font-heading text-fontLight">WebDeveloperem</span>, który z pasją tworzy strony internetowe. 
    </h2>
    <h2 
    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
    >
    Walczę na całej powierzchni programistycznego pola, wykorzystując <span class="font-heading text-fontLight">PHP</span> i <span class="font-heading text-fontLight">JavaScript</span> jako swoje oręża.
</h2>
<h2 
class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
>
To dzięki nim mogę realizować swoją wizję i tworzyć strony, które <span class="font-heading text-fontLight">zachwycają</span> odbiorców.
</h2>
               
            </div>
            <!-- IMAGE---->
            <div ref="imgBottom"
                class="flex justify-center items-center h-96 lg:h-auto mt-6 mb-12 lg:w-1/2 lg:py-16 lg:px-4 xl:p-10 2xl:p-20"
            >
                <img
                    src="/assets/images/about/about.webp"
                    alt="zdjęcie przedstawiające mój wizerunek"
                    class="h-full object-cover box-shadow"
                    loading="lazy"
                />
            </div>
        </div>
        <!--END CONTAINER---->
        <!-- MARQUEE---->
        <div class="flex justify-center pb-12">
           <TechsMarquee :tools="tools"/>
        </div>
    </section>



</template>

