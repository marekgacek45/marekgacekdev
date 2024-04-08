<template>
    <li class="link">
        <a
            v-if="type === 'anchor'"
            :href="href"
            class="link-item"
            :class="{ active: isActive }"
            ><slot></slot
        ></a>
        <Link
            v-else
            :href="href"
            class="link-item"
            :class="{ active: isActive }"
            ><slot></slot
        ></Link>
    </li>
</template>

<script setup>
defineProps({
    isMobile: Boolean,
    href: String,
    type: String,
});
</script>

<style>
.link {
    @apply cursor-pointer hover:animate-shake;
}

.link-item {
    @apply text-6xl lg:text-xl text-fontLight lg:text-fontDark font-action mt-1  uppercase opacity-70 lg:opacity-100;
}

.link-item.active{
    @apply text-ownYellow-400 lg:text-ownPurple-400 lg:font-semibold;
}


.desktop.active {
    @apply text-ownPurple-400 font-semibold;
}
.mobile.active {
    @apply text-ownYellow-400;
}

</style>
