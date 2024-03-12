<template>
    <div>
        <Head title="Edytuj Projekt"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Edytuj Projekt" class="w-1/2 mx-auto">
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
                                <Label for="title" id="title">Nazwa</Label>

                                <Error v-if="form.errors.title">{{
        form.errors.title
    }}</Error>
                            </Field>
                            <Field>
                                <Input
                                    type="text"
                                    id="site_link"
                                    name="site_link"
                                    v-model="form.site_link"
                                    required
                                />
                                <Label for="site_link" id="site_link">Link</Label>

                                <Error v-if="form.errors.site_link">{{
        form.errors.site_link
    }}</Error>
                            </Field>
                            <Field>
                                <Input
                                    type="text"
                                    id="youtube_link"
                                    name="youtube_link"
                                    v-model="form.youtube_link"
                                    required
                                />
                                <Label for="youtube_link" id="youtube_link">YT Link</Label>

                                <Error v-if="form.errors.youtube_link">{{
        form.errors.youtube_link
    }}</Error>
                            </Field>
                        <Field>
                            <div class="flex justify-start items-center gap-4">
                                <img :src="image" alt="" class="w-12" />
                                <input
                                    type="file"
                                    @input="form.image = $event.target.files[0]"
                                />
                                <Error v-if="form.errors.image">{{
                                    form.errors.image
                                }}</Error>
                            </div>
                        </Field>

                        <Field>
    <Label for="name" id="name">Narzędzia</Label>
    <ul class="flex gap-6">
        <li class="mt-6" v-for="tool in tools" :key="tool.id">
            <input type="checkbox" v-model="form.tools" :value="tool.id"/>
            <label for="">{{ tool.name }}</label>
        </li>
    </ul>
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
                                <!-- <TextArea
                                    id="description"
                                    name="description"
                                    v-model="form.description"
                                    required
                                ></TextArea> -->
                                <QuillEditor
                                theme="snow"
                                toolbar="full"
                                contentType="html"
                                v-model:content="form.description"
                               
                            />
                                <Label for="description" id="description">Treść</Label>

                                <Error v-if="form.errors.description">{{
        form.errors.description
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

import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

const props = defineProps({
    form: Object,
    errors: Object,
    project: Object,
    tools:Object,
    categories:Object
});

const form = useForm({
    title: props.project.title,
    site_link: props.project.site_link,
    youtube_link: props.project.youtube_link,
    image:props.project.image,
    description:props.project.description,
    tools: props.project.tools.map(tool => tool.id),
    categories: props.project.categories.map(category => category.id),
});

// const fileChange = (e) => {
//     form.logo = e.target.files[0];
// };

const image = "/storage/" + props.project.image;



const submit = () => {
    // form.put(route("admin.testimonial.update", props.testimonial.id), {
    //     preserveScroll: true,
    //     onSuccess: () => {},
    // });

    console.log(form);
    router.post(route("admin.project.update", props.project.id), {
        _method: "put",
        title: form.title,
    site_link: form.site_link,
    youtube_link: form.youtube_link,
    image:form.image,
    description:form.description,
    tool_id:form.tools,
    category_id:form.categories
    });
};
</script>
