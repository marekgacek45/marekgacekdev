<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Table from "@/Components/Admin/Table.vue";
import TableHeader from "@/Components/Admin/TableHeader.vue";
import TableDataCell from "@/Components/Admin/TableDataCell.vue";
import TagBox from "@/Components/Blog/TagBox.vue";
import BtnEdit from "@/Components/Admin/BtnEdit.vue";
import BtnTrash from "@/Components/Admin/BtnTrash.vue";
import Modal from "@/Components/Base/Modal.vue";

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
                            <button @click="openModal">
                                <img
                                    src="/assets/icons/admin/trash.svg"
                                    alt=""
                                    class="w-6 hover:animate-shake"
                                />
                            </button>

                            <v-if isModalOpen>
                                <Modal
                                    :title="'usuń'"
                                    :isModalOpen="isModalOpen"
                                    @update:isModalOpen="isModalOpen = $event"
                                    ><div class="text-black p-12 flex flex-col">
                                        <span class="text-lg"
                                            >Czy na pewno chcesz usunąć tę
                                            opinię?</span
                                        >
                                        <div
                                            class="flex justify-center items-center gap-12 mt-12"
                                        >
                                            <PrimaryButton>
                                                <Link
                                                    @click="closeModal"
                                                    method="DELETE"
                                                    :href="
                                                        route(
                                                            'admin.post.delete',
                                                            post.id
                                                        )
                                                    "
                                                >
                                                    Tak
                                                </Link>
                                            </PrimaryButton>
                                        </div>
                                    </div></Modal
                                >
                            </v-if>
                        </TableDataCell>
                    </tr>
                </Table>
            </div>

            <div>
                <Link
                    :href="route('admin.post.create')"
                    class="absolute bottom-6"
                    ><img
                        src="/assets/icons/admin/plus.svg"
                        alt=""
                        class="w-12 border-4 border-ownTurquise-400 bg-ownTurquise-400 rounded-full hover:animate-shake"
                /></Link>
            </div>
        </AdminLayout>
    </div>
</template>

<style scoped>
.modal-fade-enter-from,
.modal-fade-leave-to {
    opacity: 0;
    transform: scale(0.3);
}

.modal-fade-enter-to,
.modal-fade-leave-from {
    opacity: 1;
    transform: scale(1) rotate(0);
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity 1s ease,
        transform 2s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}
</style>
