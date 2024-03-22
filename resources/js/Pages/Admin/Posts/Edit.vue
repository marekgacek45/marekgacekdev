<template>
    <div>
        <Head title="Edytuj Post"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Edytuj Post" class="w-1/2 mx-auto">
                <div class="bg-bgLight-200 py-6">
                    <form
                        @submit.prevent="submit"
                        enctype="multipart/form-data"
                    >
                        <Field>
                            <Input
                                type="text"
                                id="title"
                                name="title"
                                v-model="form.title"
                                required
                            />
                            <Label for="title" id="title">Tytył</Label>

                            <Error v-if="form.errors.title">{{
                                form.errors.title
                            }}</Error>
                        </Field>

                        <Field>
                            <div class="flex justify-start items-center gap-4">
                                <!-- <img :src="image" alt="" class="w-12" /> -->
                                <input
                                    type="file"
                                    @input="
                                        form.thumbnail = $event.target.files[0]
                                    "
                                />
                                <Error v-if="form.errors.thumbnail">{{
                                    form.errors.thumbnail
                                }}</Error>
                            </div>
                        </Field>

                        <Field>
    <Label for="name" id="name">Kategorie</Label>
    <ul class="flex gap-6">
        <li class="mt-6" v-for="category in categories" :key="category.id">
            <input type="checkbox" v-model="form.categories" :value="category.id"/>
            <label for="">{{ category.name }}</label>
        </li>
    </ul>
</Field>

                        <Field>
                            <QuillEditor
                                theme="snow"
                                toolbar="full"
                                contentType="html"
                                v-model:content="form.content"
                            />
                            <Label for="content" id="content">Treść</Label>

                            <Error v-if="form.errors.content">{{
                                form.errors.content
                            }}</Error>
                        </Field>

                        <Field
                            ><PrimaryButton type="submit"
                                >Edytuj</PrimaryButton
                            ></Field
                        >
                    </form>
                </div>
            </OldSchoolCard>
        </AdminLayout>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import Field from "@/Components/Form/Field.vue";
import Label from "@/Components/Form/Label.vue";
import Input from "@/Components/Form/Input.vue";
import Error from "@/Components/Form/Error.vue";
import TextArea from "@/Components/Form/TextArea.vue";
import OldSchoolCard from "@/Components/OldSchoolCard.vue";

import AdminLayout from "@/Layouts/AdminLayout.vue";

import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

import { router } from "@inertiajs/vue3";
import { QuillEditor, Quill } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import ImageResize from "quill-image-resize";
Quill.register("modules/imageResize", ImageResize);

const props = defineProps({
    form: Object,
    errors: Object,
    post: Object,
    tools: Object,
    categories: Object,
});

// const fileChange = (e) => {
//     form.logo = e.target.files[0];
// };

console.log(props.post.categories);

const form = useForm({
    title: props.post.title,

    thumbnail: props.post.thumbnail,

    content: props.post.content,
    categories: props.post.categories.map((category) => category.id),
});




// const image = "/storage/" + props.post.thumbnail;

const submit = () => {
    // form.put(route("admin.testimonial.update", props.testimonial.id), {
    //     preserveScroll: true,
    //     onSuccess: () => {},
    // });

    console.log(form);
    router.post(route("admin.post.update", props.post.id), {
        _method: "put",
        title: form.title,
    
    thumbnail:form.thumbnail,
    content:form.content,
    category_id:form.categories
    });
};
</script>
