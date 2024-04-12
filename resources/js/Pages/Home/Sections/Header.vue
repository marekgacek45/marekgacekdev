<script setup>
import { Vue3Marquee } from "vue3-marquee";
import { useGlobalMotion } from "@/motionSetup.js";


const { fromBottom, opacity } = useGlobalMotion();
</script>

<template>
    <header class="bg-[url('/assets/movies/header-poster.webp')] bg-center bg-cover md:bg-none section mt-[69px] h-[calc(100vh-69px)] relative">
        <!--VIDEO-BG-->
        <video
            autoplay
            loop
            muted
            playsinline
            poster="/assets/movies/header-poster.webp"
            class="hidden md:block absolute inset-0 w-full h-full object-cover"
        >
            <source src="/assets/movies/header.mp4" type="video/mp4" />

            Twoja przeglądarka nie obsługuje odtwarzacza wideo.
        </video>
        <!--OVERLAY-->
        <div
            class="bg-black absolute top-0 right-0 left-0 bottom-0 opacity-50"
        ></div>
        <!--CONTENT-->
        <div
            ref="fromBottom"
            class="absolute inset-0 -mt-24 flex flex-col justify-center items-center text-center px-6 gap-6 md:gap-12 max-w-screen-xl mx-auto"
        >
            <h1
                class="text-4xl xs:text-6xl md:text-8xl 2xl:text-9xl font-heading text-ownYellow-400 uppercase leading-6"
              
            >
                Zacznij od <br />
                dobrej strony
            </h1>
            <h2
                class="md:text-xl 2xl:text-2xl font-action text-fontLight tracking-widest"
            >
                Wszystko czego potrzebujesz, aby zablysnac w sieci
            </h2>
            <div class="flex flex-col md:flex-row gap-6 md:gap-12 mt-4">
                <Button :href="route('portfolio')" btnType="white"
                    >Portfolio</Button
                >
                <Button type="anchor" href="#o-mnie" btnType="third"
                    >Dowiedz sie wiecej</Button
                >
            </div>
        </div>

        <!-- MARQUEE---->
        <div
            ref="opacity"
            class="absolute left-0 right-0 bottom-4 xs:bottom-8 flex justify-center"
        >
            <Vue3Marquee
                :pauseOnHover="true"
                :duration="30"
                :clone="true"
                class="bg-transparent text-ownPink-200 overflow-hidden py-3"
            >
                <p
                    class="text-3xl xs:text-4xl md:text-5xl font-heading font-black uppercase mr-2 tracking-wider"
                >
                    Strony WWW • Sklepy Internetowe • Design • Social Media •
                    Copywriting • Fotografia • Artykuly Marketingowe • Wizytowki
                    Google •
                </p>
            </Vue3Marquee>
        </div>
    </header>
</template>
