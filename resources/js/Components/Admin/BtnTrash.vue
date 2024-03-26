<script setup>
import { defineEmits } from "vue";

const emit = defineEmits(["open-modal"]);

const emitOpenModal = () => {
    emit("open-modal");
    
};
</script>

<template>
    <button type="button" @click="emitOpenModal">
        <img
            src="/assets/icons/admin/trash.svg"
            alt=""
            class="w-6 hover:animate-shake"
        />
    </button>
</template>
