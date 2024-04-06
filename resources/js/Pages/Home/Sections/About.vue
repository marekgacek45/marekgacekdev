<script setup>
import ServicesCard from "@/Components/Home/ServicesBox.vue";
import TestimonialsCard from "@/Components/Home/TestimonialsCard.vue";

const props = defineProps({
   testimonials:Array,
   services:Array
})

import { useGlobalMotion } from "@/motionSetup.js";

const { fromBottom} = useGlobalMotion();


</script>


<template>
    <section id="o-mnie" class="section  bg-ownPurple-400  ">
        <!--CONTAINER-->
        <div class="wrapper gap-12 2xl:gap-24 py-16 lg:py-12">
             <!--LEFT-->
            <div
                class="flex justify-center items-center lg:h-auto lg:w-1/2 lg:px-12 lg:px-0"
            >
                <ServicesCard :services="services"/>
            </div>
 <!--RIGHT-->
            <div
                class="lg:w-1/2 flex flex-col gap-20 justify-center  lg:mr-3 py-6 lg:py-12"
            >
                <div ref="fromBottom" class="space-y-6 lg:space-y-12 text-center lg:text-left" >
                    <h2 
                     class="text-4xl md:text-5xl xl:text-6xl  uppercase font-heading text-ownYellow-400 "  >wybierz projekt stworzony specjalnie
                        dla Ciebie</h2>
                    
                    <h3 class="font-action text-3xl md:text-4xl ">
                        Po prostu daj znac,<br> a ja zajme sie reszta!
                    </h3>
                </div>
                <div >
                    <TestimonialsCard :testimonials="testimonials"/>
                </div>
            </div>
        </div>
    </section>
</template>

