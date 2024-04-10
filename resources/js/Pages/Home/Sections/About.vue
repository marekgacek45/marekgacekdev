<script setup>
import ToolsMarquee from "@/Components/Home/ToolsMarquee.vue";
import AboutParagraph from "@/Components/Home/AboutParagraph.vue";

import { useGlobalMotion } from "@/motionSetup.js";

import {ref,onMounted} from 'vue'
const { fromRight,fromBottom } = useGlobalMotion();

defineProps({
    tools: Object,
});

const images = [
    '/assets/images/my-photo.webp',
    '/assets/images/my-photo--pixel.webp',
]

let currentImageIndex = ref(0)

let currentImage = ref(images[currentImageIndex.value])

onMounted(() => {
  setInterval(() => {
    currentImageIndex.value = (currentImageIndex.value + 1) % images.length;
    currentImage.value = images[currentImageIndex.value];
  }, 3000); 
});


</script>

<template>
    <section class="bg-bgLight-400  pt-24 pb-12">
        <!-- CONTAINER---->
        <Wrapper class="xl:flex-row max-w-screen-2xl ">
            <!-- IMG---->
            <div
                ref="fromBottom"
                class="flex justify-center items-center  xl:h-auto mt-6 mb-12 xl:w-1/2  lg:pr-10 2xl:pr-16 "
            >
                <div class="flex flex-col relative">
                    <img
                        
                       :src="currentImage"
                        alt="zdjęcie przedstawiające mój wizerunek"
                        class="h-full object-cover box-shadow"
                        loading="lazy"
                        width="580"
                        height="580"
                    />
                </div>
            </div>
            <!--TEXT-->
            <div
                ref="fromRight"
                class="flex flex-col justify-center gap-6 text-center xl:text-left xl:w-1/2 lg:mr-3"
            >
                <Heading>Czesc, mam na imie Marek</Heading>
                <AboutParagraph
                    >Jestem
                    <span class="font-heading text-ownPink-400"
                        >WebDeveloperem</span
                    >, który z pasją tworzy strony internetowe.</AboutParagraph
                >
                <AboutParagraph>
                    Walczę na całej powierzchni programistycznego pola,
                    wykorzystując
                    <span class="font-heading text-ownPurple-400 text-"
                        >PHP</span
                    >
                    i
                    <span class="font-heading text-ownTurquise-400"
                        >JavaScript</span
                    >
                    jako swoje oręża.</AboutParagraph
                >

                <ToolsMarquee :tools="tools" />
                <AboutParagraph>
                    Na swojej ścieżce programisty ukończyłem wiele kursów min.
                    <span class="font-heading text-ownPink-400"
                        >Opanuj JS-Przeprogramowani</span
                    >
                    czy
                    <span class="font-heading text-ownPurple-400"
                        >wtf-Maciej Korsan</span
                    >.
                </AboutParagraph>
                <AboutParagraph>
                    Oprócz tego jestem certyfikowanym specjalistą
                    <span class="font-heading text-ownTurquise-400"
                        >google</span
                    >
                    z zakresu marketingu.</AboutParagraph
                >
            </div>
        </Wrapper>
    </section>
</template>
