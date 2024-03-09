<template>
    <transition name="modal-fade">
                          <div
          v-if="isModalOpen"
          class="fixed inset-0 flex justify-center items-center px-6 sm:px-12 2xl:px-0 pb-12 pt-32 lg:pt-0 bg-bgDark-400 bg-opacity-50"
          :class="classes"
          @click="closeModal"
      >
          <div class="bg-bgLight-200">
              <OldSchoolCard
                  :title="title"
                  class="max-w-screen-xl"
              >
            
<slot></slot>
              </OldSchoolCard>
          </div>
      </div></transition>
</template>

<script setup>

import OldSchoolCard from '../OldSchoolCard.vue';



const props = defineProps({
 
  isModalOpen: Boolean,
  closeModal: Function,
title:String
});

const emit = defineEmits(["update:isModalOpen"]);

const closeModal = () => {
  emit("update:isModalOpen", false);
};


</script>

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