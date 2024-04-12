<script setup>
defineProps({
    btnType: {
        type: String,
        default: "primary",
    },
    destiny: String,
    href: String,
});

const buttonClasses = {
    primary: " primary",
    secondary: " secondary",
    third: " third ",
    fourth: " fourth ",
    white: "white ",
};
</script>

<template>
    <a
        v-if="destiny === 'anchor'"
        :href="href"
        class="common-btn box-shadow"
        :class="buttonClasses[btnType]"
        aria-label="{{ aria }}"
    >
        >
        <slot></slot
    ></a>

    <Link v-else class="common-btn box-shadow" :class="buttonClasses[btnType]">
        <slot></slot>
    </Link>
</template>

<style scoped>
.common-btn {
    @apply px-12 2xl:px-16 py-4 text-lg xs:text-xl md:text-2xl font-action font-bold hover:animate-shake duration-300;
}

.primary {
    @apply bg-ownPurple-400 hover:bg-ownPurple-600 text-fontLight;
}
.secondary {
    @apply bg-ownYellow-400 hover:bg-ownYellow-600;
}

.third {
    @apply bg-ownTurquise-400 hover:bg-ownTurquise-600;
}
.fourth {
    @apply bg-ownPink-400 hover:bg-ownPink-600;
}
.white {
    @apply bg-white hover:bg-gray-200;
}
</style>
