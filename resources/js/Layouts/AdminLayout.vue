<template>
    <transition name="fade" mode="out-in" appear>
        <div>
            <SideBar />
            <NavBar />

            <main class="ml-[98px] xl:ml-[220px] mt-[90px] p-4 sm:p-6  ">
                <slot> </slot>
            </main>
        </div>
    </transition>
</template>

<script setup>
import SideBar from "@/Shared/Admin/SideBar.vue";
import NavBar from "@/Shared/Admin/NavBar.vue";
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