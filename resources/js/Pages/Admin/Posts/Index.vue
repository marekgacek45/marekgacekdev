<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Table from "@/Components/Admin/Table.vue";
import TableHeader from "@/Components/Admin/TableHeader.vue";
import TableDataCell from "@/Components/Admin/TableDataCell.vue";
import TagBox from "@/Components/Blog/TagBox.vue";
import BtnEdit from "@/Components/Admin/BtnEdit.vue";
import BtnTrash from "@/Components/Admin/BtnTrash.vue";
import BtnCreate from '@/Components/Admin/BtnCreate.vue'
import ModalDelete from "@/Components/Admin/ModalDelete.vue";

defineProps({
    posts: Object,
});

import { ref } from "vue";

let isModalOpen = ref(false);

const openModal = (post) => {
    isModalOpen.value = true;
    post.value = post;
};

const closeModal = () => {
    isModalOpen.value = false;
};

import moment from "moment";

const formatDate = (date) => {
    return moment(date).format("DD-MM-YYYY");
};
</script>

<template>
    <div>
        <Head title="Posty"> </Head>
        <AdminLayout>
            <div class="relative overflow-x-auto">
                <Table caption="Posty">
                    <template v-slot:header>
                        <TableHeader class="hidden sm:table-cell"
                            >#</TableHeader
                        >
                        <TableHeader>Tytuł</TableHeader>
                        <TableHeader>Kategorie</TableHeader>
                        <TableHeader>Publikacja</TableHeader>
                        <TableHeader>Akcje</TableHeader>
                    </template>
                    <tr
                        v-for="(post, index) in posts"
                        :key="post.id"
                        class="bg-white dark:bg-gray-800"
                    >
                        <TableDataCell class="hidden sm:table-cell">
                            {{ index + 1 }}</TableDataCell
                        >
                        <TableDataCell>
                            <a
                                :href="route('post.show', post.slug)"
                                target="_blank"
                                class="hover:text-ownYellow-400 duration-300"
                                >{{ post.title }}</a
                            ></TableDataCell
                        >
                        <TableDataCell class="flex gap-2">
                            <TagBox
                                v-for="category in post.categories"
                                :key="category.id"
                                :bgColor="category.name"
                                >{{ category.name }}</TagBox
                            >
                        </TableDataCell>

                        <TableDataCell class="hidden lg:table-cell">
                            {{ formatDate(post.created_at) }}
                        </TableDataCell>
                        <TableDataCell class="flex gap-2">
                            <BtnEdit
                                :link="route('admin.post.edit', post.id)"
                            />
                            <BtnTrash @open-modal="openModal" />

                            <v-if isModalOpen>
                                <ModalDelete
                                    name="post"
                                    :href="route('admin.post.delete', post.id)"
                                    :isModalOpen="isModalOpen"
                                    @update:isModalOpen="isModalOpen = $event"
                                />
                            </v-if>
                        </TableDataCell>
                    </tr>
                </Table>
            </div>

           <BtnCreate :href="route('admin.post.create')"/>
              
        </AdminLayout>
    </div>
</template>

