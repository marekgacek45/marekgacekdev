<template>
    <ul class="flex gap-6 font-textArch text-lg">
            <NavLink
                href="/o_mnie" 
                :isActive="$page.component === 'About/Index'"
                >O mnie</NavLink
            >
       
            <NavLink
                href="/uslugi"
                :isActive="$page.component === 'Services/Index'"
                >Usługi</NavLink
            >
       
            <NavLink
                href="/portfolio"
                :isActive="$page.component === 'Portfolio/Index'"
                >Portfolio</NavLink
            >
       
            <NavLink
                href="/kontakt"
                :isActive="$page.component === 'Contact/Index'"
                >Kontakt</NavLink
            >
        
            <NavLink href="/blog" :isActive="$page.component === 'Blog/Index'"
                >Blog</NavLink
            >
        
    </ul>
</template>

<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>


