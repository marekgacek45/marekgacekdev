<script setup>
import Layout from "@/Layouts/Layout.vue";

import Header from "@/Pages/Home/Sections/Header.vue";
import Services from "@/Pages/Home/Sections/Services.vue";
import Blog from "@/Pages/Home/Sections/Blog.vue";
import YouTube from "@/Pages/Home/Sections/YouTube.vue";

import About from "@/Pages/Home/Sections/About.vue";
import ContactSection from "@/Pages/Home/Sections/Contact.vue"

const props = defineProps({
    posts: Array,
    testimonials: Array,
    services:Array,
    tools:Array
});
</script>

<template>
    <Head>
        <title>Coś więcej niż strony internetowe | Marek Gacek</title>
        <meta
            name="description"
            content="Nie trać czasu na nudne i sztampowe strony internetowe. Zaufaj mi i zobacz, jak zrobię  z Twojej strony prawdziwą petardę. Oferuję nie tylko webdesign, ale też marketing internetowy na kosmicznym poziomie. Sprawdź i daj się zaskoczyć!"
        />
    </Head>

    <Layout>
        <Header></Header>

        <main>
            <About :tools="tools"/>
            <Services :testimonials="testimonials" :services="services" />

            <Blog :posts="posts"/>


            <YouTube></YouTube>

            <ContactSection/>
            
        </main>
    </Layout>
</template>
