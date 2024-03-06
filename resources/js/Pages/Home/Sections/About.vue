<template>
    <section class="section  bg-ownPurple-400 ">
        <!--CONTAINER-->
        <div class="wrapper gap-12 2xl:gap-24 py-16 lg:py-24">
             <!--LEFT-->
            <div
                class="flex justify-center items-center lg:h-auto lg:w-1/2 md:px-12 lg:px-0"
            >
                <ServicesCard />
            </div>
 <!--RIGHT-->
            <div
                class="lg:w-1/2 flex flex-col gap-20 justify-center lg:mr-3 py-6 lg:py-12"
            >
                <div class="space-y-6 lg:space-y-4">
                    <h2 class="text-5xl xs:text-6xl lg:text-7xl xl:text-8xl  uppercase font-heading text-ownYellow-400">Unikalność to klucz!</h2>
                    <h3 class="font-text text-3xl ">
                        Odrzuć standardy - wybierz projekt stworzony specjalnie
                        dla Ciebie.
                    </h3>
                    <h3 class="font-heading text-4xl ">
                        Po prostu daj znać, a ja zajmę się resztą!
                    </h3>
                </div>
                <div class="md:px-12 lg:px-0">
                    <TestimonialsCard :comments="comments"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import ServicesCard from "@/Components/Home/ServicesCard.vue";
import TestimonialsCard from "@/Components/Home/TestimonialsCard.vue";



const props = defineProps({
    comments:Array
})


</script>