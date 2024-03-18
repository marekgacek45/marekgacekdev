<script setup>
import TagBox from "@/Components/Blog/TagBox.vue";


const props = defineProps({
    post:Object
})
console.log(props.post);
</script>



<template>
     <Link as="div" class="lg:col-span-2 flex flex-col justify-start items-start gap-3 group cursor-pointer">
            <!--POST CARD-->
            <div class="w-full max-h-[500px] overflow-hidden group-first:block hidden">
                <img
                    :src="'/storage/' + post.thumbnail"
                    alt=""
                    class="w-full h-full object-cover group-hover:scale-110 duration-300"
                />
            </div>
            <TagBox>Laravel</TagBox>
            <h2 class="text-3xl sm:text-5xl uppercase font-heading group-hover:animate-shake">
               {{post.title}}
            </h2>
        </Link>
</template>