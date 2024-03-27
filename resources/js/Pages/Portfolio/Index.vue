<template>
    <Head title="Zobacz moje projekty | Portfolio | Marek Gacek">
        <meta
            name="description"
            content="Zajrzyj do mojego portfolio i zobacz, jak zabawa kodem i designem tworzy niepowtarzalne projekty. Odkryj, jak moja kreatywność ożywia cyfrowy świat."
        />
    </Head>
    <Layout>
        <main>
            <Portfolio
                v-if="shuffledProjects && shuffledProjects.length > 0"
                :projects="shuffledProjects"
                :categories="categories"
            />
        </main>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import Portfolio from "./Portfolio.vue";
import { ref,onMounted } from "vue";

const props = defineProps({
    projects: Array,
    categories: Array,
});

let shuffledProjects = ref([]);

onMounted(() => {
    shuffledProjects.value = [...props.projects].sort(() => Math.random() - 0.5);
});
</script>
