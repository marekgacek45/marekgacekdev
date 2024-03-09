<script setup>
import Layout from "@/Layouts/Layout.vue";

import FirstSection from "./FirstSection.vue";
import SecondSection from './SecondSection.vue'

const props = defineProps({
    tools:Array
})


</script>


<template>
    <Head>
        <title>Dowiedz się co nieco o mnie | Marek Gacek</title>
        <meta name="description" content="Zajrzyj i poznaj programistę, który łączy kodowanie i marketing w niebanalny sposób. Wejdź i zobacz, jak moja praca wyróżnia się w świecie online" />
    </Head>
    <Layout>
        

            <main
            
            >

             <FirstSection :tools="tools"/>
            <SecondSection/> 
            
        </main>
    
    </Layout>
</template>


