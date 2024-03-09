<template>
    <div>
        <Head title="Edytuj Opinię"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Edytuj Opinię" class="w-1/2 mx-auto">
                <div class="bg-bgLight-200 py-6">
                    <form
                        @submit.prevent="submit"
                        enctype="multipart/form-data"
                    >
                    <Field>
                                <Input
                                    type="text"
                                    id="name"
                                    name="name"
                                    v-model="form.name"
                                    required
                                />
                                <Label for="name" id="name">Nazwa</Label>

                                <Error v-if="form.errors.name">{{
        form.errors.name
    }}</Error>
                            </Field>
                        <Field>
                            <div class="flex justify-start items-center gap-4">
                                <img :src="logo" alt="" class="w-12" />
                                <input
                                    type="file"
                                    @input="form.logo = $event.target.files[0]"
                                />
                                <Error v-if="form.errors.logo">{{
                                    form.errors.logo
                                }}</Error>
                            </div>
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

const props = defineProps({
    form: Object,
    errors: Object,
    tool: Object,
});

const form = useForm({
    name: props.tool.name,
    logo: props.tool.logo,
});

// const fileChange = (e) => {
//     form.logo = e.target.files[0];
// };

const logo = "/storage/" + props.tool.logo;

console.log(logo);

const submit = () => {
    // form.put(route("admin.testimonial.update", props.testimonial.id), {
    //     preserveScroll: true,
    //     onSuccess: () => {},
    // });

    console.log(form);
    router.post(route("admin.tool.update", props.tool.id), {
        _method: "put",
        name: form.name,
        logo: form.logo,
        
    });
};
</script>
