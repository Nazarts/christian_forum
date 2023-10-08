<x-app-layout>
    <x-slot name="content">
        <section class="container pt-[50px] mx-auto" id="main_page__header">
            <div>
                <p class="text-gray-300 font-semibold text-center text-2xl">03.09 - 04.09</p>
                <p class="text-gray-300 font-semibold text-center mt-3 text-2xl">м. Дубно, Рівненська обл.</p>
                <p class="text-center text-[3.2rem] md:text-[72px] text-amber-50 font-bold">Форум ХДП</p>
                <div class="mx-auto w-[240px] flex items-center justify-center">
                    <div class="min-w-[5px] flex-1 h-[1px] bg-lime-300"></div>
                    <p class="mx-4 w-fit text-[3.2rem] md:text-[54px] text-amber-50 font-bold">2.0</p>
                    <div class="min-w-[5px] flex-1 h-[1px] bg-lime-300"></div>
                </div>
                <div class="flex justify-center gap-4 mt-4 flex-wrap">
                    <button class="text-amber-50 min-w-[245px] text-[1.5rem] font-semibold border-2 px-4 py-3 active:opacity-50 transition-opacity duration-150 rounded-sm border-amber-50">Зареєструватись</button>
                    <button class="text-lime-300 min-w-[245px] text-[1.5rem] font-semibold border border-2 active:opacity-50 transition-opacity duration-150 px-4 py-3 rounded-sm border-lime-300">Про форум</button>
                </div>
            </div>
            <div>
                <img src="{{asset('images/OIG.dK.WNIiG0viDOUL.jpeg')}}" alt="">
            </div>
        </section>
        <div class="container mx-auto mt-[100px]" id="about_forum">
            <p class="text-[56px] bg-amber-100 w-fit ps-4 pe-[100px] font-bold">Про форум</p>
        </div>
    </x-slot>
</x-app-layout>
