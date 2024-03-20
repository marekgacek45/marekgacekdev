<script setup>
import Layout from "@/Layouts/Layout.vue";

import TagBox from "@/Components/Blog/TagBox.vue";

import moment from "moment";
import pl from "moment/locale/pl";

const formatDate = (date) => {
   return moment(date).format('LLLL'); 

};

const props = defineProps({
    post: Object,
});
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
        <div class="max-w-screen-xl mx-auto mt-[70px]">
            <!--THUMBNAIL-->
            <img
                :src="'/storage/' + post.thumbnail"
                class="w-3/4 object-cover mx-auto"
            />
            <!--TITLE-->
            <div class="flex flex-col items-center gap-4">
                <h1 class="text-center font-heading text-6xl mt-6">
                    {{ post.title }}
                </h1>
                <TagBox>Laravel</TagBox>
                <span> {{ formatDate(post.created_at) }}</span>
            </div>

            <div v-html="post.content"></div>
        </div>
    </Layout>
</template>
