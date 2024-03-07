<template>
    <section class="section lg:h-[calc(100vh-71px)] bg-bgLight-400">
        <!-- CONTAINER---->
        <div class="wrapper">
            <!-- IMAGE---->
            <div
                class="flex justify-center items-center h-96 lg:h-auto mt-6 mb-12 lg:w-1/2 lg:py-16 lg:px-4 xl:p-10 2xl:p-20 order-1 lg:order-none"
            >
                <img
                    src="/assets/images/about/about-2.webp"
                    alt="człowiek sterujący robotem"
                    class="h-full object-cover box-shadow"
                    loading="lazy"
                />
            </div>
            <!-- TEXT---->
            <div
                class="flex flex-col justify-center gap-6 lg:w-1/2 lg:mr-3 py-12"
            >
                <h1 class="text-7xl font-heading text-ownPurple-400">Coś więcej niż praca</h1>
                <h2
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Nie tylko tworzę strony, ale też się nimi
                    <span class="font-heading text-ownPink-400">dzielę</span>.
                </h2>
                <h2
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Na moim
                    <Link href="/blog" class="font-heading text-ownPink-400"> blogu</Link>
                    znajdziesz wiele ciekawych artykułów na temat
                    webdevelopmentu, technologii i trendów.
                </h2>
                <h2
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Zapraszam cię na mój
                    <a
                        href="https://www.youtube.com/@marekgacekdev"
                        target="_blank"
                        class="font-heading text-ownPink-400" 
                        >kanał YouTube</a
                    >, gdzie pokazuję, jak tworzę projekty od zera, jak
                    rozwiązuję problemy i jak testuję swoje umiejętności.
                </h2>
            </div>
        </div>
     
        <!--END CONTAINER---->
    </section>
</template>


