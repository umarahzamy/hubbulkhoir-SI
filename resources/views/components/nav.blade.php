<nav class="sticky top-0 bg-[#ffffff] shadow-md">
    <div class="container flex items-center justify-between py-2 mx-auto ">
        <div class="flex justify-start lg:w-3/12">
            <x-logo />
        </div>
        <div class="hidden lg:w-6/12 md:block">
            <ul class="flex justify-center gap-x-8">
                <x-nav-item> Beranda </x-nav-item>
                <x-nav-item> Profil </x-nav-item>
                <x-nav-item> Akademik </x-nav-item>
                <x-nav-item> Kabar & Berita </x-nav-item>
                <x-nav-item> Kontak </x-nav-item>
            </ul>
        </div>
        <div class="hidden lg:w-3/12 md:block">
            <div class="flex justify-end">
                <x-button class="bg-red-900 rounded hover:bg-red-950" href="/login"> Login </x-button>
            </div>
        </div>
        <div class="flex justify-end md:hidden">
            <button class="cursor-pointer">
                <i class="mx-4 text-xl fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</nav>
