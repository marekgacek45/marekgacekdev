<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";


const props = defineProps({
    post:Object
})

</script>



<template>
     <Link :href="route('post.show',post.slug)" as="div" class="lg:col-span-2 flex flex-col justify-start items-start gap-3 group cursor-pointer">
            <!--POST CARD-->
            <div class="w-full max-h-[500px] overflow-hidden group-first:block hidden">
                <img
                    :src="'/storage/' + post.thumbnail"
                    :alt="'miniaturka postu o tytule' + post.title"
                    class="w-full h-full object-cover group-hover:scale-110 duration-300"
                />
            </div>
            <div class="flex  gap-3">

                <TagBox
                v-for="category in post.categories"
                :key="category.id"
                :bgColor="category.name"
                >{{ category.name }}</TagBox
                >
            </div>
            <h2 class="text-3xl sm:text-5xl uppercase font-heading group-hover:animate-shake">
               {{post.title}}
            </h2>
        </Link>
</template>