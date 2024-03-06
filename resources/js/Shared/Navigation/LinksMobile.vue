<template>
    <ul class="flex flex-col justify-center items-center gap-4">
      
            <NavLink
                href="/o_mnie"
                isMobile="true"
                :isActive="$page.component === 'About/Index'"
                @click="addOverflow"
                >O mnie</NavLink
            >
        
            <NavLink
                href="/uslugi"
                isMobile="true"
                :isActive="$page.component === 'About/Servies'"
                @click="addOverflow"
                >Usługi</NavLink
            >
       
            <NavLink
                href="/portfolio"
                isMobile="true"
                :isActive="$page.component === 'About/Portfolio'"
                @click="addOverflow"
                >Portfolio</NavLink
            >
       
            <NavLink
                href="/contact"
                isMobile="true"
                :isActive="$page.component === 'About/Contact'"
                @click="addOverflow"
                >Kontakt</NavLink
            >
      
            <NavLink
            
                href="/blog"
                isMobile="true"
                :isActive="$page.component === 'About/Blog'"
                @click="addOverflow"
                
                >Blog</NavLink
            >
       
    </ul>
</template>

<script setup>
import NavLink from "@/Components/NavLink.vue";

const body = document.querySelector("body");

const addOverflow = () => {
    body.classList.remove("overflow-y-hidden");
};
</script>

