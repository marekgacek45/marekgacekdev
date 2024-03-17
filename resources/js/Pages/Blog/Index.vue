<script setup>
import Layout from "@/Layouts/Layout.vue";

import TagBox from "@/Components/Blog/TagBox.vue";

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
                    <div
                        class="wrapper gap-12 2xl:gap-24 py-16 lg:py-24 max-w-screen-2xl"
                    >

                    <!--RECENT POST CONTAINER-->
                        <div class="grid grid-cols-3 gap-x-24 mt-16">
                            <!--LEFT MAIN-->
                            <div
                                class="col-span-2 flex flex-col justify-start items-start gap-3"
                            >
                            <div class='w-full max-h-[500px] overflow-hidden'>

                                <img
                                src="/assets/images/2.jpg"
                                alt=""
                                class="w-full h-full object-cover hover:scale-110 duration-300 "
                                />
                            </div>
                                <TagBox>Laravel</TagBox>
                                <h2 class="text-5xl  uppercase font-heading">
                                    Vote For The Greatest Game Of All Time In
                                    Our Bracket Tournament | Round 3
                                </h2>
                            </div>
                            <!--RIGHT-->
                            <div
                                class="col-span-1 flex flex-col justify-between"
                            >
                                <div class="flex flex-col justify-start items-start gap-4 border-b pb-2 border-black">
                                    <img
                                        src="/assets/images/2.jpg"
                                        alt=""
                                        class="w-full h-full object-cover max-h-[200px]"
                                    />
                                    <TagBox>Laravel</TagBox>
                                    <h2 class="text-3xl  uppercase font-heading">
                                        Vote For The Greatest Game Of All Time In
                                        Our Bracket Tournament | Round 3
                                    </h2>
                                </div>

                                <div class="flex flex-col justify-start items-start gap-2 border-b  pb-2 border-black">
                                    
                                    <TagBox>Laravel</TagBox>
                                    <h2 class="text-3xl  uppercase font-heading">
                                        Vote For The Greatest Game Of All Time In
                                        Our Bracket Tournament | Round 3
                                    </h2>
                                </div>
                                <div class="flex gap-4 flex-col justify-start items-start   ">
                                    
                                    <TagBox>Laravel</TagBox>
                                    <h2 class="text-3xl  uppercase font-heading">
                                        Vote For The Greatest Game Of All Time In
                                        Our Bracket Tournament | Round 3
                                    </h2>
                                </div>
                            </div>
          
                          
                                
                        </div>
                    </div>
                </section>
            </main>
        </Layout>
    </div>
</template>


