<script setup>
import SocialList from '@/Components/SocialList.vue';
import NavLinks from '@/Components/Navigation/NavLinks.vue'

defineProps({
    showModal: Boolean,
});

</script>

<template>
    <transition>
        <div
            v-if="showModal"
            class="bg-bg fixed lg:absolute top-0 bottom-0 right-0 left-0  overflow-hidden z-40"
        >

        <div class="modal flex justify-center items-center flex-col gap-5">


                <NavLinks/>
              
               <SocialList/>
                
            </div>
        </div>
    </transition>
</template>


<style lang="css" scoped>
.modal {
    position: absolute;
    top: 71px;
    bottom: 0px;
    right: 0px;
    left: 0px;
    display: flex;
    justify-content: center;
    align-items: center;

    @apply   bg-ownPurple-400;
}


.v-enter-active,
.v-leave-active {
    transition:  ease, transform 1s ease; 
}

.v-enter-from,
.v-leave-to {
    
    transform: translateX(100%); 
}

.v-enter-to,
.v-leave-from {

    transform: translateX(0); 
}

</style>