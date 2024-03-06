<template>
    <header
        class="section lg:h-[calc(100vh-71px)]  mt-[71px] bg-ownYellow-400"
    >
        <!-- CONTAINER---->
        <div
            class="wrapper"
        >
            <!-- TEXT---->
            <div
                class="flex flex-col justify-center gap-6 lg:w-1/2 lg:mr-3 py-12"
            >
                <h1 class="text-7xl md:text-8xl xl:text-9xl font-heading">
                    Stwórz stronę swoich marzeń
                </h1>
                <h2
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Projektuję, tworzę i rozwijam innowacyjne strony internetowe
                    które zaprezentują Twoją markę, zachwycą Twoich klientów i
                    dodadza wiarygodności Twojej i tak już niesamowitej
                    organizacji
                </h2>
                <div>
                    <!-- <Link :href="route('portfolio')"><primary-button aria-label="Portfolio">Portfolio</primary-button></Link> -->
                    <Link href="/"><primary-button aria-label="Portfolio">Portfolio</primary-button></Link>
                </div>
            </div>
            <!-- IMAGE---->
            <div
                class="flex justify-center items-center h-96 lg:h-auto mt-6 mb-12 lg:w-1/2 lg:py-16 lg:px-4  2xl:p-10"
            >
                <img
                    src="/assets/images/home/header--big.webp"
                    alt=""
                    class="hidden md:block h-full object-cover box-shadow"
                    loading="lazy"
                />
                <img
                    src="/assets/images/home/header--small.webp"
                    alt=""
                    class="md:hidden h-full object-cover box-shadow"
                    loading="lazy"
                />
            </div>
        </div>
        <!--END CONTAINER---->
        <!-- MARQUEE---->
        <div class="flex justify-center pb-12">
            <Vue3Marquee
                :pauseOnHover="true"
                :duration="30"
                class="bg-bgDark-400 overflow-hidden py-1"
            >
                <p
                    class="text-6xl sm:text-7xl xl:text-8xl font-heading text-fontLight uppercase"
                >
                    Strony Internetowe • Design • Social Media • Copywriting •
                    Fotografia • Artykuły Marketingowe • Wizytówki Google •
                </p>
            </Vue3Marquee>
        </div>
    </header>
</template>

<script setup>
import PrimaryButton from "@/Components/Base/PrimaryButton.vue";
import { Vue3Marquee } from "vue3-marquee";
</script>

<style scoped></style>