<script setup>
import Layout from "@/Layouts/Layout.vue";


import Header from "@/Pages/Home/Sections/Header.vue";
import About from "@/Pages/Home/Sections/About.vue";
import Blog from "@/Pages/Home/Sections/Blog.vue";
import YouTube from "@/Pages/Home/Sections/YouTube.vue";



const props = defineProps({
    posts: Array,
    testimonials: Array,
});
</script>

<template>
    <Head>
        <title>Coś więcej niż strony internetowe | Marek Gacek</title>
        <meta name="description" content="Nie trać czasu na nudne i sztampowe strony internetowe. Zaufaj mi i zobacz, jak zrobię  z Twojej strony prawdziwą petardę. Oferuję nie tylko webdesign, ale też marketing internetowy na kosmicznym poziomie. Sprawdź i daj się zaskoczyć!" />
        
    </Head>
    <Layout>
        
        <Header
           ></Header>
        
        <main>
            <About :testimonials="testimonials" />
           
            <Blog  />
            <YouTube></YouTube>
        </main>
        
    </Layout>
</template>

