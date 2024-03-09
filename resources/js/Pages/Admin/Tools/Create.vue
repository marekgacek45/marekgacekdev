<template>
    <div>
        <Head title="Dodaj Narzędzie"> </Head>
        <AdminLayout>
            <OldSchoolCard title="Dodaj Narzędzie" class="w-1/2 mx-auto">
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
                                <input type="file"  @input="form.logo = $event.target.files[0]" />
                                <Error v-if="form.errors.logo">{{
        form.errors.logo
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
    name: "",
    logo:null,
    
});

const submit = () => {
   
    form.post(route("admin.tool.store"), {
        preserveScroll: true,
        onSuccess: () => {
          
        },
    });
};
</script>