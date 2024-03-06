<template>
    
    <Link as="li" class="link" :class="{ 'mobile': isMobile, 'desktop': !isMobile, 'active':isActive }"><slot></slot></Link>

</template>

<script setup>

defineProps({
isMobile:Boolean,
isActive:Boolean,
})

</script>

<style>

.link{
@apply cursor-pointer hover:animate-shake 
}

.desktop {
@apply text-xl font-text font-semibold ;
}

.mobile {
@apply text-6xl lg:text-7xl text-fontLight font-heading  uppercase opacity-70 ;
}

.desktop.active{
@apply text-ownPurple-400 font-semibold
}
.mobile.active{
@apply text-ownYellow-400 
}
</style>