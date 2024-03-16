<script setup>
import ServicesCard from "@/Components/Home/ServicesCard.vue";
import TestimonialsCard from "@/Components/Home/TestimonialsCard.vue";

const props = defineProps({
   testimonials:Array,
   services:Array
})

import { useGlobalMotion } from "@/motionSetup.js";

const { textRight, textLeft,textBottom } = useGlobalMotion();


</script>


<template>
    <section class="section  bg-ownPurple-400 ">
        <!--CONTAINER-->
        <div class="wrapper gap-12 2xl:gap-24 py-16 lg:py-24">
             <!--LEFT-->
            <div
                class="flex justify-center items-center lg:h-auto lg:w-1/2 md:px-12 lg:px-0"
            >
                <ServicesCard :services="services"/>
            </div>
 <!--RIGHT-->
            <div
                class="lg:w-1/2 flex flex-col gap-20 justify-center lg:mr-3 py-6 lg:py-12"
            >
                <div class="space-y-6 lg:space-y-4">
                    <h2 ref="textBottom" class="text-5xl xs:text-6xl lg:text-7xl xl:text-8xl  uppercase font-heading text-ownYellow-400">Odkryj wszechświat możliwości online</h2>
                    <h3 ref="textRight" class="font-text text-3xl ">
                        Odrzuć standardy - wybierz projekt stworzony specjalnie
                        dla Ciebie.
                    </h3>
                    <h3 ref="textLeft" class="font-heading text-4xl ">
                        Po prostu daj znać, a ja zajmę się resztą!
                    </h3>
                </div>
                <div class="md:px-12 lg:px-0">
                    <TestimonialsCard :testimonials="testimonials"/>
                </div>
            </div>
        </div>
    </section>
</template>

