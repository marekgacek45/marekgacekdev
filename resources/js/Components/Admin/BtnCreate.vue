<script setup>

defineProps({
    href:String
})

</script>


<template>
      <Link as="button"
                    :href="href"
                    class="absolute bottom-6"
                    ><img
                        src="/assets/icons/admin/plus.svg"
                        alt=""
                        class="w-12 border-4 border-ownTurquise-400 bg-ownTurquise-400 rounded-full hover:animate-shake"
                /></Link>
</template>