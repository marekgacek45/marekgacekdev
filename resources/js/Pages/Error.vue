
<template>
    <Layout >
  <div class="mt-[71px] px-4 sm:px-0 py-12 lg:py-24 lg:h-[calc(100vh-371px)] flex flex-col justify-center items-center gap-6 bg-bgLight-400">
      <img :src="image" alt="" class="w-[250px]">
      <H1 class="text-2xl md:text-3xl xl:text-5xl font-heading">{{ title }}</H1>
    <span class="text-center text-lg md:text-xl  xl:text-2xl font-text">{{ description }}</span>
<Button @click="back"  aria-label="powrót">Powrót</Button>
  </div>
</Layout>
</template>




<script setup>
import { computed } from 'vue'
import PrimaryButton from '@/Components/Base/PrimaryButton.vue';
import Layout from '@/Layouts/Layout.vue';

const props = defineProps({ status: Number })

const title = computed(() => {
  return {
    503: '503 ',
    500: '500 ',
    404: '404',
    403: '403',
  }[props.status]
})

const image = computed(() => {
  return {
    503: '/assets/images/error.webp',
    500: '/assets/images/error.webp',
    404: '/assets/images/error.webp',
    403: '/assets/images/error.webp',
  }[props.status]
})

const description = computed(() => {
  return {
    503: 'Wróc później...',
    500: 'Brak odpowiedzi z serwera...',
    404: 'Niestety nie ma takiej strony...',
    403: 'Nie posiadasz uprawnień do tej strony...',
  }[props.status]
})

const back = () => {
  window.history.back()
}
</script>