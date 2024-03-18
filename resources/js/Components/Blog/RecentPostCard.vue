<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";

const props = defineProps({
    post:Object
});
</script>

<template>
    <Link as="div"
        class="flex lg:flex-col  justify-start items-start gap-8 lg:gap-4 border-b pb-6 lg:pb-2 border-black last-of-type:border-b-0 group cursor-pointer"
    >
        <div class="lg:group-first:block lg:hidden w-full max-w-[300px] lg:max-w-none max-h-[200px] overflow-hidden">
            <img
                :src="'/storage/' + post.thumbnail"
                alt=""
                class="w-full h-full object-cover object-center group-hover:scale-110 duration-300"
            />
        </div>
        <div class="flex flex-col sm:pt-6 lg:pt-0 justify-start items-start gap-2">
            <TagBox>tets</TagBox>
            <h2 class="text-xl  sm:text-2xl xl:text-3xl uppercase font-heading group-hover:animate-shake">
                {{ post.title }}
            </h2>
        </div>
    </Link>
</template>
