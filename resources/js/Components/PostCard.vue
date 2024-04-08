<script setup>
import SecondaryButton from "@/Components/Base/SecondaryButton.vue";

import { computed, toRefs } from "vue";
const props = defineProps({
    thumbnail: String,
    title: String,
    index:Number
});

const { title,index } = toRefs(props);

const altText = computed(() => `miniaturka posta o tytule ${title.value}`);


const bgColor = computed(() => {
    switch (index.value) {
        case 0:
            return 'bg-ownPink-200';
        case 1:
            return 'bg-ownYellow-400';
        case 2:
            return 'bg-ownTurquise-400';
        case 3:
            return 'bg-ownOrange-600';
        default:
            return 'bg-bgLight-200';
    }
});
const bgImage = computed(() => {
    switch (index.value) {
        case 0:
            return `group-hover:bg-[url('/assets/images/1.jpg')]`;
        case 1:
            return `group-hover:bg-[url('/assets/images/2.jpg')]`;
        case 2:
            return `group-hover:bg-[url('/assets/images/3.jpg')]`;
        case 3:
            return `group-hover:bg-[url('/assets/images/4.jpg')]`;
        default:
            return `group-hover:bg-[url('/assets/images/1.jpg')]`;
    }
});

</script>




<template>
    <Link href="#" class="group">
        <div
    class="flex flex-col justify-between items-center h-full px-10 lg:px-16 xl:px-4 2xl:px-12 py-8 border border-y-2 border-fontDark bg-no-repeat bg-cover transition-all duration-100 group-hover:border-dashed group-hover:bg-gray-600 group-hover:bg-blend-multiply"
    :class="[bgColor,bgImage]" 
>
            <div class="h-72 w-full">
                <img
                    :src="'/storage/' + thumbnail"
                    :alt="altText"
                    class="h-full w-full object-cover group-hover:hidden"
                />
            </div>
            <h2
                class=" mt-10 mb-2  text-4xl text-center font-heading uppercase group-hover:text-fontLight"
            >
                {{ title }}
            </h2>
            <Link as="button" 
                 class="border-2 border-black w-full py-2 font-textArch mt-3 group-hover:bg-bgLight-200 button-hover font-action"
             >
                 Sprawdz
             </Link>
        </div>
    </Link>
</template>

