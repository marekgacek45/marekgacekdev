<template>
    <div>
        <Head title="Dodaj Opinię"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Dodaj Opinię" class="w-1/2 mx-auto">
                <div class="bg-bgLight-200 py-6">
                    <form
                        @submit.prevent="submit"
                        enctype="multipart/form-data"
                    >
                      
                            <Field>
                                <Input
                                    type="text"
                                    id="link"
                                    name="link"
                                    v-model="form.link"
                                    required
                                />
                                <Label for="link" id="link">Link</Label>

                                <Error v-if="form.errors.link">{{
        form.errors.link
    }}</Error>
                            </Field>
                            <Field>
                                <input type="file"  @input="form.logo = $event.target.files[0]" />
                                <Error v-if="form.errors.logo">{{
        form.errors.logo
    }}</Error>
                            </Field>
                            <Field>
                                <TextArea
                                    id="content"
                                    name="content"
                                    v-model="form.content"
                                    required
                                ></TextArea>
                                <Label for="content" id="content">Treść</Label>

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
import TextArea from '@/Components/Form/TextArea.vue'
import OldSchoolCard from "@/Components/OldSchoolCard.vue";

import AdminLayout from "@/Layouts/AdminLayout.vue";

import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

defineProps({
    form: Object,
    errors: Object,
});

// const fileChange = (e) => {
//     form.logo = e.target.files[0];
// };

const form = useForm({
    link: "",
    logo:null,
    content:""
});

const submit = () => {
   
    form.post(route("admin.testimonial.store"), {
        preserveScroll: true,
        onSuccess: () => {
          
        },
    });
};
</script>