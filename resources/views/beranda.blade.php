@extends('layouts.main')
@section('section')
    <section class="">
        <div class="container mx-auto my-10">
            <div class="text-center">
                <h2 class="font-normal text-[33px]">
                    PESANTREN TAHFIDZ & IT
                </h2>
                <h1 class="text-6xl font-bold tracking-tighter ">
                    HUBBUL KHOIR
                </h1>
                <p class="py-2 pb-4 text-2xl font-light ">
                    Jago <strong>Ngaji</strong> Jago <strong>IT</strong>
                </p>
                <div class="flex justify-center">
                    <x-Button class="bg-red-900 rounded-full hover:bg-red-950">
                        Daftar Sekarang
                    </x-Button>
                </div>
            </div>
            <div class="grid gap-4 mt-4 md:grid-cols-3">
                <x-beranda.item />
            </div>
        </div>
    </section>
    <section class="container mx-auto ">
        <div class="py-4">
            <h1 class="text-xl font-bold tracking-tighter text-center">INFO TERBARU</h1>
        </div>
        <div class="flex flex-col items-center justify-center gap-2 md:flex-row">
            <x-beranda.info-item />
        </div>
        <div class="flex justify-end py-6">
            <x-button class="bg-yellow-600 rounded hover:bg-yellow-700">
                Selengkapnya
            </x-button>
        </div>
    </section>
    <section class="bg-red-900">
        <div class="container mx-auto">
            <div class="pt-4">
                <h1 class="text-xl font-bold text-center text-white">
                    HUBBUL KHOIR FACT
                </h1>
            </div>
            <div class="flex flex-col items-center justify-center px-4 md:flex-row">
                <x-beranda.fact-item />
            </div>
        </div>
    </section>
    <section class="container mx-auto ">
        <div class="flex justify-center py-16">
            <div class="w-1/2 h-64 p-3 bg-black rounded-2xl"></div>
            <div class="flex flex-col mt-16 ml-12 ">
                <h5 class="text-[33px] font-bold text-yellow-600">
                    Jago Ngaji
                </h5>
                <h2 class="text-5xl font-bold">Jago IT</h2>
                <p class="mt-3 mb-2 text-xs font-light">
                    Bertaqwa - Professional - Mandiri - Berbagi
                </p>
                <x-Button class="ml-0 text-center bg-red-900 rounded-full hover:bg-red-950">
                    Daftar Sekarang
                </x-Button>
            </div>
        </div>
    </section>
@endsection
