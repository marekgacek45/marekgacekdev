<template>
    <Head title="Zanurz się w programistycznej lekturze">
        <meta name="description" content="Jeśli kochasz programowanie i chcesz się nauczyć czegoś nowego, zapraszam Cię na mój blog, gdzie znajdziesz moje projekty, eksperymenty i wyzwania z różnych dziedzin IT. Pokażę Ci, jak tworzyć niesamowite aplikacje, jak używać nowoczesnych narzędzi i jak być lepszym programistą. Nie zwlekaj, dołącz do mnie i baw się dobrze!" />
    </Head>
    <Layout>
        

            <main
            
            >

            <section class="bg-ownTurquise-400 section py-16 lg:py-24 mt-12">
        <!--HEADING-->
        <div class="max-w-screen-2xl mx-auto text-center px-4 sm:px-12 md:px-24 lg:px-12 2xl:px-24">

            <h2 class=" text-5xl xs:text-6xl lg:text-7xl xl:text-8xl mb-24 uppercase font-heading">
                Zanurz się w lekturze i odkryj ciekawostki z programistycznego świata
            </h2>
        </div>
<!--BLOG-->
       <!-- <div class="flex flex-col justify-center items-center  gap-12 md:gap-16"> -->
       <div class="flex flex-col justify-center items-center  gap-12 md:gap-16 px-4 sm:px-0">


<img src="/assets/images/home/blog-coming-soon.webp" alt="blog nadejdzie już niedługo" class="w-[500px]">
<h2 class=" text-2xl xs:text-3xl lg:text-4xl xl:text-4xl  uppercase font-heading ">
                Jeszcze momencik i będzie gotowe
            </h2>

           <!-- <BlogSection :posts="posts"/>

           <primary-button aria-label="Zobacz wszytkie wpisy">Zobacz wszytkie wpisy</primary-button> -->
        </div>


      
    </section>
            
        </main>
    
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";



defineProps({
    techs:Array
})



</script>