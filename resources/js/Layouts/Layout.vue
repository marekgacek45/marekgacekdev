<template>
    <transition name="fade" mode="out-in" appear>
        <div>
            <NavBar/>
            <slot></slot>
            
            <Footer></Footer>
        </div>
    </transition>
</template>

<script setup>

import NavBar from "@/Shared/Navigation/NavBar.vue";
import Footer from "@/Shared/Footer.vue";
</script>


<style>


.fade-enter-active,
.fade-leave-active {
    transition: opacity 3s;
}

.fade-enter-from,
.fade-leave-to {
    @apply opacity-0;
}

</style>