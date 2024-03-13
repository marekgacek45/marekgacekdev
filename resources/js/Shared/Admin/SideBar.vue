<template>
    <aside class="fixed bottom-0 left-0 top-0  bg-ownPurple-400 z-50" >
        <div class="flex flex-col justify-center h-full px-4 py-4 ">
            <!-- LOGO-->
            <!-- <div>

                <Link href="/" class="flex  flex-start  items-center  gap-1 xl:w-1/3 group">
                    <span class="font-heading text-4xl group-hover:text-ownTurquise-400 duration-300 hidden xl:block">Marek</span>
                    <img src="/assets/logo/logo.png" alt="moje logo" class="w-16" />
                    <span class="font-heading text-4xl group-hover:text-ownPurple-400 duration-300 hidden xl:block">Gacek</span>
                </Link>
            </div> -->
            
            <!--ITEMS-->
            <div>
                <ul class="space-y-4">
           <SidebarItem ><img src="/assets/icons/admin/dashboard.svg" alt="" width="32"> <span class="hidden xl:inline-block">Dashboard</span></SidebarItem>
           <SidebarItem :href="route('admin.post.index')"><img src="/assets/icons/admin/post.svg" alt="" width="32"> <span class="hidden xl:inline-block">Posty</span></SidebarItem>
           <SidebarItem :href="route('admin.project.index')"><img src="/assets/icons/admin/project.svg" alt="" width="32"> <span class="hidden xl:inline-block">Projekty</span></SidebarItem>
           <SidebarItem :href="route('admin.category.index')"><img src="/assets/icons/admin/category.svg" alt="" width="32"> <span class="hidden xl:inline-block">Kategorie</span></SidebarItem>
           <SidebarItem :href="route('admin.testimonial.index')"><img src="/assets/icons/admin/comment.svg" alt="" width="32"> <span class="hidden xl:inline-block">Opinie</span></SidebarItem>
           <SidebarItem :href="route('admin.tool.index')"><img src="/assets/icons/admin/technology.svg" alt="" width="32"> <span class="hidden xl:inline-block">Narzędzia</span></SidebarItem>
           <SidebarItem ><img src="/assets/icons/admin/logout.svg" alt="" width="32" ><span class="hidden xl:inline-block">Wyloguj</span></SidebarItem>
               <Link :href="route('logout')" method="post" as="button">Wyloguj</Link>
               <Link :href="route('profile.edit')">edytuj profil</Link>
              
        </ul>
    </div>
    <ul>

       
    </ul>
            <!--ITEMS-->
        </div>
    </aside>
</template>


<script setup>
import SidebarItem from '@/Components/Admin/SidebarItem.vue'
</script>