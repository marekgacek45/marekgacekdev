<script setup>
import OldSchoolCard from "@/Components/OldSchoolCard.vue";


import { useGlobalMotion } from "@/motionSetup.js";

const { textRight, textLeft} = useGlobalMotion();

</script>


<template>
    <!--YOUTUBE-->
    <section
        class="bg-ownOrange-600 grid gap-24 lg:gap-0 lg:grid-cols-2 px-6 xl:px-12 py-16 lg:py-12 "
    >
        <!--LEFT-->
        <div class="flex flex-col justify-center items-center gap-12 lg:mr-12 xl:mx-24 2xl:mx-32 text-center ">
            <h2 ref="textRight" class="text-5xl xs:text-6xl lg:text-7xl xl:text-8xl  uppercase font-heading text-own">
                Zobacz mnie w akcji na YouTube!
            </h2>
            <h3 ref="textLeft"
                class="text-xl md:text-2xl xl:text-3xl font-text leading-relaxed  "
            >
            Zapraszam Cię na mój kanał na YouTube, gdzie możesz zobaczyć jak pracuję nad różnymi projektami, testuję nowe technologie i narzędzia, oraz jak dzielę się swoimi spostrzeżeniami i doświadczeniami. 
            </h3>
            <a href="https://www.youtube.com/@marekgacekdev" target="_blank"><PrimaryButton aria-label="youTube">Sprawdź</PrimaryButton></a>
        </div>

        <!--RIGHT-->
        <div>
            <OldSchoolCard title="youtube">
                <video
                    autoplay
                    loop
                    muted
                    poster="/assets/images/poster.webp"
                    class="w-full object-cover lg:min-h-[690px] hidden md:block"
                >
              
                    <source src="/assets/movies/yt.mp4" type="video/mp4"/>

                    Twoja przeglądarka nie obsługuje odtwarzacza wideo.
                </video>
                <video
                    autoplay
                    loop
                    muted
                    poster="/assets/images/poster.webp"
                    class="w-full object-cover lg:min-h-[690px] md:hidden"
                >
              
                    <source src="/assets/movies/yt-small.mp4" type="video/mp4"/>

                    Twoja przeglądarka nie obsługuje odtwarzacza wideo.
                </video>
            </OldSchoolCard>
        </div>

       
    </section>
</template>


