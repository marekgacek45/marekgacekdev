<template>
    <nav
        class="bg-ownPurple-400 fixed top-0 right-0 left-0 py-3 px-4 flex justify-between items-center z-50"
    >
        <div class="flex justify-center items-center gap-6">
            <div>
                <Link href="/" class="flex items-center gap-1 group">
                    <span
                        class="font-heading text-4xl group-hover:text-ownTurquise-400 duration-300 hidden xl:block"
                        >Marek</span
                    >
                    <img
                        src="/assets/logo/logo.png"
                        alt="moje logo"
                        class="w-16"
                    />
                    <span
                        class="font-heading text-4xl group-hover:text-ownPurple-400 duration-300 hidden xl:block"
                        >Gacek</span
                    >
                </Link>
            </div>
            <div class="flex justify-center items-center gap-4">
                <button>
                    <img
                        src="/assets/icons/admin/menu.svg"
                        alt=""
                        width="32"
                    />
                </button>
                <button>
                    <img
                        src="/assets/icons/admin/moon.svg"
                        alt=""
                        width="32"
                    />
                </button>
            </div>
        </div>

        <div class="flex justify-center items-center gap-4">
            <span class="font-heading text-2xl hidden sm:inline-block">gacmen45</span>
            <div class="border rounded-full overflow-hidden w-12 h-12">
                <img
                    src="/assets/logo/logo.png"
                    alt="moje logo"
                    class="w-full h-full object-cover"
                />
            </div>
        </div>
    </nav>
</template>
