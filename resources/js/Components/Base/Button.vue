<script setup>
defineProps({
    btnType: {
        type: String,
        default: "primary",
    },
});

const buttonClasses = {
    primary:
        " bg-ownPurple-400 hover:bg-ownPurple-600 text-fontLight",
    secondary:
        " bg-ownYellow-400 hover:bg-ownYellow-600 ",
        third:
        " bg-ownTurquise-400 hover:bg-ownTurquise-600 ",
        fourth:
        " bg-ownPink-400 hover:bg-ownPink-600 ",
        white:
        " bg-white hover:bg-gray-200 ",
};
</script>

<template>
    <Link
        as="button"
        type="button"
        class="px-12 2xl:px-16 py-4 text-lg xs:text-xl md:text-2xl font-action font-bold hover:animate-shake duration-300 box-shadow "
        :class="buttonClasses[btnType]"
    >
        <slot></slot>
    </Link>
</template>
