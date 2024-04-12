<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <ul
        class="flex flex-col lg:flex-row justify-center items-center gap-4 lg:gap-6"
    >
        <NavLink
            href="/portfolio"
            :isActive="$page.component === 'Portfolio/Index'"
            >Portfolio</NavLink
        >

        <NavLink
            type="anchor"
            href="/#kontakt"
            :isActive="$page.component === 'Contact/Index'"
            >Kontakt</NavLink
        >

        <NavLink href="/blog" :isActive="$page.component === 'Blog/Index'"
            >Blog</NavLink
        >
    </ul>
</template>
