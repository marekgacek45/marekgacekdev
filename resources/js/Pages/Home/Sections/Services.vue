<script setup>
import ServicesCard from "@/Components/Home/ServicesBox.vue";
import TestimonialsCard from "@/Components/Home/TestimonialsCard.vue";

const props = defineProps({
   testimonials:Array,
   services:Array
})

import { useGlobalMotion } from "@/motionSetup.js";

const { fromBottom,fromRight} = useGlobalMotion();


</script>


<template>
    <section id="o-mnie" class="bg-bgLight-400 pt-12 pb-12 ">
        <!--CONTAINER-->
        <Wrapper class="xl:flex-row gap-6 2xl:gap-32 max-w-screen-max">
             <!--LEFT-->
           
 <!--RIGHT-->
            <div
                class="xl:w-1/2 flex flex-col gap-20 justify-center  lg:mr-3 py-6 lg:py-12 "
            >
                <div  ref="fromRight"  class="space-y-6 lg:space-y-12 text-center lg:text-left order-1 xl:order-none" >
                    <Heading 
                     class="xl:text-left"  >wybierz projekt stworzony specjalnie
                        dla Ciebie</Heading>
                    
                    <h3 class="font-action text-3xl md:text-4xl text-ownPink-400 text-center xl:text-left">
                        Po prostu daj znac,<br> <span class="text-ownPurple-400">a ja zajme sie reszta!</span>
                    </h3>
                </div>
                <div ref="fromBottom"
                 class="lg:w-1/2 xl:w-full mx-auto order-0 xl:order-none">
                    <TestimonialsCard :testimonials="testimonials"/>
                </div>
            </div>
            <div ref="fromBottom"
                class="flex justify-center items-center xl:h-auto lg:w-3/5 xl:w-1/2  mx-auto"
            >
                <ServicesCard :services="services"/>
            </div>
        </Wrapper>
    </section>
</template>

