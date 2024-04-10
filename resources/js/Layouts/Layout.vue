<template>
    <transition name="fade" mode="out-in" appear>
        <div>
            <NavBar/>
            <slot></slot>
            
            <Footer></Footer>

            <VuePreloader
    background-color="#7852BF"
    color="#E9E159"
    transition-type="fade-up"
    :loading-speed="15"
    :transition-speed="1400"
    @loading-is-over="loadingIsOver"
    @transition-is-over="transitionIsOver"
  ></VuePreloader>

        </div>
    </transition>
</template>

<script setup>

import NavBar from "@/Shared/NavBar.vue";
import Footer from "@/Shared/Footer.vue";

import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css'
</script>


<style>

</style>