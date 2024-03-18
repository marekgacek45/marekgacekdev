<script setup>
import Layout from "@/Layouts/Layout.vue";

import RecentPosts from "./Sections/RecentPosts.vue";

const props = defineProps({
    posts:Object
})



</script>

<template>
    <div>
        <Head title="Zanurz się w programistycznej lekturze">
            <meta
                name="description"
                content="Jeśli kochasz programowanie i chcesz się nauczyć czegoś nowego, zapraszam Cię na mój blog, gdzie znajdziesz moje projekty, eksperymenty i wyzwania z różnych dziedzin IT. Pokażę Ci, jak tworzyć niesamowite aplikacje, jak używać nowoczesnych narzędzi i jak być lepszym programistą. Nie zwlekaj, dołącz do mnie i baw się dobrze!"
            />
        </Head>
        <Layout>
            <main>
                <section class="section bg-ownPurple-400">
                    <!--CONTAINER-->
                    <div class="wrapper gap-12 2xl:gap-24 py-16 lg:py-24">
                        <RecentPosts :posts="posts"/>
                    </div>
                </section>
            </main>
        </Layout>
    </div>
</template>
