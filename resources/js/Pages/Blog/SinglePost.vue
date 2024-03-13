<script setup>
import Layout from "@/Layouts/Layout.vue";






const props = defineProps({
    post: Object,
    
});
</script>

<template>
    <Head>
        <title>Coś więcej niż strony internetowe | Marek Gacek</title>
        <meta name="description" content="Nie trać czasu na nudne i sztampowe strony internetowe. Zaufaj mi i zobacz, jak zrobię  z Twojej strony prawdziwą petardę. Oferuję nie tylko webdesign, ale też marketing internetowy na kosmicznym poziomie. Sprawdź i daj się zaskoczyć!" />
        
    </Head>
    <Layout>
        <div class="mt-96">

            <div v-html="post.content"></div>
        </div>
        
    </Layout>
</template>

