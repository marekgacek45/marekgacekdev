<template>
    <Head title="Zobacz moje projekty | Portfolio | Marek Gacek">
        <meta name="description" content="Zajrzyj do mojego portfolio i zobacz, jak zabawa kodem i designem tworzy niepowtarzalne projekty. Odkryj, jak moja kreatywność ożywia cyfrowy świat." />
        
    </Head>
    <Layout>
        
       
        <main>
            <Portfolio v-if="projects && projects.length > 0" :projects="projects" :categories="categories"/>
           </main>

        
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import Portfolio from "./Portfolio.vue";


defineProps({
  projects:Array,
  categories:Array
})

</script>
