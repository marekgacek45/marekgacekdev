
<template>
    <Layout >
  <div class="mt-[71px] px-4 sm:px-0 py-12 lg:py-24 lg:h-[calc(100vh-371px)] flex flex-col justify-center items-center gap-6 bg-ownPurple-400">
      <img :src="image" alt="" class="w-[400px]">
      <H1 class="text-2xl md:text-3xl xl:text-5xl font-heading">{{ title }}</H1>
    <span class="text-center text-lg md:text-xl  xl:text-2xl font-text">{{ description }}</span>
<PrimaryButton @click="back" class="bg-ownYellow-400 hover:bg-ownYellow-600" aria-label="powrót">Powrót</PrimaryButton>
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
    503: '503: ',
    500: '500: ',
    404: '404',
    403: '403: n',
  }[props.status]
})

const image = computed(() => {
  return {
    503: '/assets/images/header.png',
    500: '/assets/images/header.png',
    404: '/assets/images/header.png',
    403: '/assets/images/header.png',
  }[props.status]
})

const description = computed(() => {
  return {
    503: 'Sorry, we are doing some maintenance. Please check back soon.',
    500: 'Whoops, something went wrong on our servers.',
    404: 'Niestety nie ma takiej strony...',
    403: 'Sorry, you are forbidden from accessing this page.',
  }[props.status]
})

const back = () => {
  window.history.back()
}
</script>