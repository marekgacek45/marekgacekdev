<template>
    <div>
        <Head title="Opinie"> </Head>
        <AdminLayout>
            <div class="relative overflow-x-auto">
                <table
                    class="mx-auto w-3/4 text-sm text-left rtl:text-right text-fontLight border border-fontDark box-shadow"
                >
                    <caption
                        class="p-3 font-heading text-3xl text-left rtl:text-right text-fontLight bg-bgDark-400 uppercase"
                    >
                        Opinie
                    </caption>
                    <thead class="text-sm text-fontDark uppercase">
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 hidden sm:table-cell"
                            >
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">Nazwa</th>

                            <th
                                scope="col"
                                class="px-6 py-3 hidden lg:table-cell"
                            >
                                Data dodania
                            </th>

                            <th scope="col" class="px-6 py-3">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(testimonial, index) in testimonials"
                            :key="testimonial.id"
                            class="bg-white dark:bg-gray-800"
                        >
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white hidden sm:table-cell"
                            >
                                {{ index + 1 }}
                            </th>
                            <td
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{ testimonial.link }}
                            </td>

                            <td class="px-6 py-4 hidden lg:table-cell">
                                {{ formatDate(testimonial.created_at) }}
                            </td>
                            <td class="px-6 py-4 flex gap-4 items-center">
                                <Link
                                :href="route('admin.testimonial.edit', testimonial.id)"
                                   
                                >
                                <img src="/assets/icons/admin/edit.svg" alt="" class="w-6 hover:animate-shake">
                                </Link>
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
                                        @update:isModalOpen="
                                            isModalOpen = $event
                                        "
                                        ><div
                                            class="text-black p-12 flex flex-col"
                                        >
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
                                                                'admin.testimonial.delete',
                                                                testimonial.id
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <Link
                    :href="route('admin.testimonial.create')"
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

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Modal from "@/Components/Base/Modal.vue";

import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

defineProps({
    testimonials: Object,
});

import { ref } from "vue";

let isModalOpen = ref(false);

const openModal = (testimonial) => {
    isModalOpen.value = true;
    testimonial.value = testimonial;
};

const closeModal = () => {
    isModalOpen.value = false;
};

import moment from "moment";

const formatDate = (date) => {
    return moment(date).format("DD-MM-YYYY");
};
</script>

<style scoped>
/* .modal {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
} */

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
