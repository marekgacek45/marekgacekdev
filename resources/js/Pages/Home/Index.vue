<template>
    <!-- <Head title="Coś więcej niż strony internetowe | Marek Gacek">
        <meta name="description" content="Nie trać czasu na nudne i sztampowe strony internetowe. Zaufaj mi i zobacz, jak zrobię  z Twojej strony prawdziwą petardę. Oferuję nie tylko webdesign, ale też marketing internetowy na kosmicznym poziomie. Sprawdź i daj się zaskoczyć!" />
        
    </Head> -->
    <Layout>
        
        <Header
           ></Header>
        
        <!-- <main>
            <Services :comments="comments" />
            <Blog :posts="posts" />
            <YouTube></YouTube>
        </main> -->
        <main class='p-48'>lorem303402304</main>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";


import Header from "@/Pages/Home/Sections/Header.vue";
// import Services from "@/Pages/Home/Sections/Services.vue";
// import Blog from "@/Pages/Home/Sections/Blog.vue";
// import YouTube from "./Sections/YouTube.vue";



const props = defineProps({
    posts: Array,
    comments: Array,
});
</script>