<script setup>
import Modal from "@/Components/Base/Modal.vue";
import { ref } from 'vue'
import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

defineProps({
    name: String,
    href: String,
});

let isModalOpen = ref(false);

const closeModal = () => {
    isModalOpen.value = false;
};
</script>

<template>
    <Modal
        :title="'usuń'"
        :isModalOpen="isModalOpen"
        @update:isModalOpen="isModalOpen = $event"
    >
        <div class="text-black p-12 flex flex-col">
            <span class="text-lg"
                >Czy na pewno chcesz usunąć tę {{ name }}?</span
            >
            <div class="flex justify-center items-center gap-12 mt-12">
                <PrimaryButton>
                    <Link @click="closeModal" method="DELETE" :href="href">
                        Tak
                    </Link>
                </PrimaryButton>
            </div>
        </div>
    </Modal>
</template>
