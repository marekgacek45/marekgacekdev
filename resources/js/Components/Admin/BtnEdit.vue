<script setup>

defineProps({
    link:String
})

</script>

<template>
    <Link as="button" :href="link">
        <img
            src="/assets/icons/admin/edit.svg"
            alt=""
            class="w-6 hover:animate-shake"
        />
    </Link>
</template>
