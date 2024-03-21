<template>
    <div>
        <Head title="Dodaj Post"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Dodaj Post" class="w-1/2 mx-auto">
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
                            <input
                                type="file"
                                @input="form.thumbnail = $event.target.files[0]"
                            />
                            <Error v-if="form.errors.thumbnail">{{
                                form.errors.thumbnail
                            }}</Error>
                        </Field>

                       
                        <Field>
                            <Label for="name" id="name">Kategorie</Label>
                            <ul class="flex gap-6">
                                <li
                                    class="mt-6"
                                    v-for="category in categories"
                                    :key="category.id"
                                >
                                    <input
                                        type="checkbox"
                                        v-model="form.category_id"
                                        :value="category.id"
                                    />
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
                            <Label for="content" id="content" 
                                >Treść</Label
                            >

                            <Error v-if="form.errors.content">{{
                                form.errors.content
                            }}</Error>
                        </Field>

                        <Field
                            ><PrimaryButton type="submit"
                                >Dodaj</PrimaryButton
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

import { QuillEditor,Quill } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import ImageResize from 'quill-image-resize';
Quill.register('modules/imageResize', ImageResize);


defineProps({
    form: Object,
    errors: Object,
    tools: Object,
    categories: Object,
});

// const fileChange = (e) => {
//     form.logo = e.target.files[0];
// };

const form = useForm({
    title: "",
   
    thumbnail: null,
    
    category_id: [],
    content:''
});


const submit = () => {
    console.log(form);
    form.post(route("admin.post.store"), {
        preserveScroll: true,
        onSuccess: () => {},
    });
};
</script>
