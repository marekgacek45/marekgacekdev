<script setup>
import GridSection from "@/Components/Base/GridSection.vue";
import { useGlobalMotion } from "@/motionSetup.js";

const { fromBottom, fromLeft } = useGlobalMotion();
</script>

<template>
    <GridSection class="bg-bgDark-400">
        <!--LEFT-->
        <div
            ref="fromLeft"
            class="flex flex-col justify-center items-center gap-12 lg:mr-12 xl:mx-24 2xl:mx-32"
        >
            <Heading class="text-ownYellow-400"
                >Zobacz mnie w akcji na YouTube!</Heading
            >
            <h3
                ref="fromBottom"
                class="text-xl md:text-2xl xl:text-3xl font-text leading-relaxed text-fontLight"
            >
                Zapraszam Cię na mój kanał na YouTube, gdzie możesz zobaczyć jak
                pracuję nad różnymi projektami, testuję nowe technologie i
                narzędzia, oraz jak dzielę się swoimi spostrzeżeniami i
                doświadczeniami.
            </h3>

            <Button
                destiny="anchor"
                btnType="secondary"
                href="https://www.youtube.com/@marekgacekdev"
                target="_blank"
                aria-label="sprawdź"
                >Sprawdz</Button
            >
        </div>

        <!--RIGHT-->
        <div class="fromBottom">
            <OldSchoolCard title="youtube" class="">
                <video
                    autoplay
                    loop
                    muted
                    poster="/assets/movies/yt--desktop.webp"
                    class="w-full object-cover lg:min-h-[590px] hidden md:block"
                >
                    <source
                        src="/assets/movies/yt--desktop.mp4"
                        type="video/mp4"
                    />

                    Twoja przeglądarka nie obsługuje odtwarzacza wideo.
                </video>

                <img
                    src="/assets/movies/yt--mobile.webp"
                    alt="youtube Marekgacekdev"
                    loading="lazy"
                    class="w-full object-cover lg:min-h-[690px] md:hidden"
                />
            </OldSchoolCard>
        </div>
    </GridSection>
</template>
