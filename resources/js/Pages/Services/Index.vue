<template>
    <div>
        <Head title="Chętnie Ci pomogę | Usługi | Marek Gacek">
            <meta name="description" content="Tworzę strony internetowe, które przyciągają uwagę i marketing, który działa cuda. Zajrzyj do świata, gdzie każdy klik to krok w stronę sukcesu online. Odkryj, co mogę dla Ciebie zrobić!" />
        </Head>
        <Layout>
            <main
                class="section lg:h-[calc(100vh-71px)] mt-[71px] bg-ownTurquise-400"
            >
                <!-- CONTAINER---->
                <div class="px-12 flex flex-col  lg:grid grid-cols-12 lg:h-[72vh] py-24">
                    <div class="col-span-7 lg:h-[72vh] overflow-y-auto order-1 lg:order-none">
                        <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-2.webp')"
                                title="strony internetowe"
                                >Tworzenie stron internetowych to moja pasja i specjalność. Nie ma miejsca na szablonowe rozwiązania – każdy projekt jest dla mnie wyjątkowy i tworzony od podstaw. Z zamiłowaniem do designu i najnowszych technologii, gwarantuję, że strony, które tworzę, są nie tylko responsywne, ale i przyciągają wzrok swoją nowoczesnością. Niezależnie od tego, czy potrzebujesz strony-wizytówki, bloga, witryny firmowej, czy dedykowanego systemu dla hotelu czy restauracji – znajdę rozwiązanie idealnie dopasowane do Twoich potrzeb. Każdy klient jest dla mnie ważny, a jego zadowolenie to moja misja.</ServiceCard
                            >

                            <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-21.webp')"
                                title="Sklepy online"
                                >Tworzenie sklepów online to dla mnie więcej niż praca – to sztuka dopasowania technologii do ludzkich potrzeb. Wykorzystuję różnorodne platformy, aby idealnie wpasować się w budżet i oczekiwania każdego klienta. Nie tylko uruchomię Twój sklep, ale też zintegruję go z narzędziami takimi jak Baselinker, a jeśli zajdzie potrzeba – dodam produkty, stworzę przyciągające opisy i wykonam profesjonalne zdjęcia. Wszystko po to, by Twój e-biznes startował z najlepszej pozycji.</ServiceCard
                            >
                            <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-6.webp')"
                                title="Social Media"
                                >Social media to nie tylko miejsce spotkań online, to potężne narzędzie, które może wypromować Twój biznes na niespotykaną skalę. Stworzę dla Ciebie profile na wybranych platformach i zajmę się ich prowadzeniem – od publikacji postów, które przyciągną uwagę, po ich promowanie, aby dotarły do jeszcze szerszej publiczności. Z moją pomocą Twoje social media zyskają nowe życie i pomogą Ci nawiązać wartościowe relacje z klientami.</ServiceCard
                            >
                            <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-7.webp')"
                                title="Wizytówki google"
                                >Wizytówki Google to Twoja wizytówka w świecie internetu. Z moją pomocą nie tylko stworzę Twoją wizytówkę, ale też zadbam o jej optymalizację i bieżące prowadzenie. Dzięki temu Twoja firma będzie widoczna i atrakcyjna dla klientów szukających usług w sieci. Zajmę się wszystkim – od słów kluczowych po aktualizacje – abyś Ty mógł skupić się na tym, co robisz najlepiej.</ServiceCard
                            >
                            <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-33.webp')"
                                title="Fotografia"
                                >Fotografia to nie tylko obraz, to historia, którą opowiadam za pomocą obiektywu. Wykonuję zdjęcia, które idealnie oddają charakter Twojej marki i wzbogacają treść strony internetowej oraz profile social media. Każde ujęcie to przemyślany kadr, który przyciąga uwagę i podkreśla to, co w Twoim biznesie najlepsze.</ServiceCard
                            >
                            <ServiceCard
                                @mouseover="updateImage('/assets/images/services/services-32.webp')"
                                title="Copywriting"
                                >Potrzebujesz przekonujących tekstów na stronę lub opisów produktów, które przyciągną klientów? Zajmuję się copywritingiem, który sprzedaje, informuje i bawi. Twoje treści będą nie tylko oryginalne, ale też skrojone na miarę Twoich potrzeb i oczekiwań rynku.

</ServiceCard
                            >
                    </div>
                    <div class="col-span-5 w-full h-[400px] md:h-[600px] lg:h-[72vh] pb-12   lg:pl-6 lg:py-12 2xl:p-12 2xl:py-0"> <img :src="image" alt="" class="w-full h-full object-cover"></div>
                </div>
            </main>
        </Layout>
    </div>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";

import { ref } from "vue";
import ServiceCard from "@/Components/ServiceCard.vue";

let image = ref("/assets/images/services/services-12.webp");

const updateImage = (newImage) => {
    image.value = newImage;
};

</script>