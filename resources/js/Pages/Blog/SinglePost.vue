<script setup>
import Layout from "@/Layouts/Layout.vue";

import TagBox from "@/Components/Blog/TagBox.vue";

import moment from "moment";

const formatDate = (date) => {
    return moment(date).format("LLLL");
};

const props = defineProps({
    post: Object,
});

console.log(props.post);
</script>

<template>
    <Head>
        <title>{{ post.title }} | Marek Gacek</title>
        <meta
            name="description"
            content="Nie trać czasu na nudne i sztampowe strony internetowe. Zaufaj mi i zobacz, jak zrobię  z Twojej strony prawdziwą petardę. Oferuję nie tylko webdesign, ale też marketing internetowy na kosmicznym poziomie. Sprawdź i daj się zaskoczyć!"
        />
    </Head>
    <Layout>
        <div class="max-w-screen-xl mx-auto mt-[70px] px-4">
            <!--THUMBNAIL-->
            <img
                :src="'/storage/' + post.thumbnail"
                :alt="'miniaturka postu o tytule' + post.title"
                class="w-full object-cover mx-auto max-h-[600px]"
            />
            <!--TITLE-->
            <div class="flex flex-col items-center gap-4">
                <h1 class="text-center font-heading text-5xl md:text-6xl mt-6">
                    {{ post.title }}
                </h1>

                <div class="flex gap-3">
                    <TagBox
                        v-for="category in post.categories"
                        :key="category.id"
                        :bgColor="category.name"
                        >{{ category.name }}</TagBox
                    >
                </div>
                <span> {{ formatDate(post.created_at) }}</span>
            </div>

            <div
                class="max-w-[800px] mx-auto pt-12 py-24 font-text text-xl leading-relaxed content"
                v-html="post.content"
            ></div>
        </div>
    </Layout>
</template>

<style scoped>
.content :deep(pre.ql-syntax) {
    @apply p-4 text-fontLight   bg-bgDark-600 mt-2 overflow-x-auto;
}

.content :deep(img) {
    @apply mx-auto max-h-[400px];
}

.content :deep(a) {
    @apply hover:underline;
}

.content :deep(h2) {
    @apply text-2xl md:text-3xl;
}
</style>
