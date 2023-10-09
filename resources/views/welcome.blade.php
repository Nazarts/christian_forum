<x-app-layout>
    <x-slot name="content">
        <section class="container pt-[50px] px-5 mx-auto flex flex-col lg:flex-row gap-8 justify-between" id="main_page__header">
            <div class="pt-10">
                <p class="text-gray-300 font-semibold text-center text-2xl">03.11 - 04.11</p>
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
                <p class="text-amber-50 font-semibold text-2xl mt-6 text-center">або <a href="" class="underline decoration-2 decoration-amber-500">Увійдіть</a></p>
            </div>
            <div class="lg:max-w-[700px]">
                <img width="100%" src="{{asset('images/OIG.dK.WNIiG0viDOUL.jpeg')}}" alt="">
            </div>
        </section>
        <div class="container mx-auto mt-[100px]" id="about_forum">
            <p class="text-[56px] bg-amber-100 w-fit ps-4 pe-[100px] font-bold">Про форум</p>

        </div>
        <div class="container mx-auto mt-[100px]" id="sign_up">
            <div class="flex gap-3 flex-col lg:flex-row">
                <form class="py-10 basis-1 lg:basis-1/2 order-2">
                    <p class="text-center text-amber-50 text-[54px] font-bold">Реєстрація</p>
                    <div class="mt-10">
                        <x-text-input type="tel" name="phone" placeholder="Номер телефону"></x-text-input>
                    </div>
                    <div class="mt-8">
                        <x-text-input type="text" name="name" placeholder="Ваше ім'я та прізвище"></x-text-input>
                    </div>
                    <div class="mt-8 ps-3 relative group">
                        <x-popup>Якшщо ви плануєте приїхати за день і вам потрібен нічліг натисніть на галочку!!!</x-popup>
                        <input type="checkbox" class="animate-pulse w-[20px] h-[20px]" name="include_sleep_place" id="include_sleep_place">
                        <label class="ms-3 text-amber-50 text-[18px]">Потрібен нічліг</label>
                    </div>
                    <div class="mx-auto w-fit mt-8">
                        <button class="bg-transparent text-[20px] font-semibold text-center text-amber-50 border w-[220px] py-4 border-amber-50">Зареєструватись</button>
                    </div>
                </form>
                <div class="bg-[#ac0940] basis-1 order-1 lg:basis-1/2 py-4 px-6">
                    <p class="text-amber-50 text-[40px] font-bold">Важлива інформація!!!</p>
                    <p class="text-gray-300 mt-4 font-medium text-[18px]">Перед початком реєстрації уважно прочитайте інформацію нижче</p>
                    <ul class="mt-4 text-[20px] text-amber-50">
                        <li class="flex mb-3 items-center">
                            <div class="w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/bill.png')}}" alt="">
                            </div> Вартість - 500 грн. за 2 дні</li>
                        <li class="flex mb-3 items-center relative">

                            <div class="w-[36px] min-w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/slumber.png')}}" alt="">
                            </div> <span>Якщо ви плануєте приїхати на форум за день до початку і вам потрібне місце для ночівлі, натисніть галочку <strong><i>"Потрібен нічліг"</i></strong></span></li>
                        <li class="flex items-center">
                            <div class="w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/bill.png')}}" alt="">
                            </div> Вартість</li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
