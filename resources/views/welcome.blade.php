@php
    $scripts = ['resources/js/main.js', 'resources/css/main.css'];
@endphp
<x-app-layout :scripts="$scripts">
    <x-slot name="content">
        <section class="container pt-[50px] px-5 mx-auto flex flex-col lg:flex-row gap-8 justify-between" id="main_page__header">
            <div class="pt-0 xl:pt-10 min-w-[50%]">
                <p class="text-gray-300 font-semibold text-center text-2xl">03.11 - 04.11</p>
                <p class="text-gray-300 font-semibold text-center mt-3 text-2xl">м. Дубно, Рівненська обл.</p>
                <p class="text-center text-[3.2rem] md:text-[72px] text-amber-50 font-bold">Форум ХДП</p>
                <div class="mx-auto w-[240px] flex items-center justify-center">
                    <div class="min-w-[5px] flex-1 h-[1px] bg-lime-300"></div>
                    <p class="mx-4 w-fit text-[3.2rem] md:text-[54px] text-amber-50 font-bold">2.0</p>
                    <div class="min-w-[5px] flex-1 h-[1px] bg-lime-300"></div>
                </div>
                <div class="flex justify-center gap-4 mt-4 flex-wrap">
                    <button class="text-amber-50 min-w-[245px] text-[1.5rem] font-semibold border-2 px-4 py-3 active:opacity-50 transition-opacity duration-150 rounded-sm border-amber-50">
                        <a href="#sign_up">Зареєструватись</a>
                    </button>
                    <button class="text-lime-300 min-w-[245px] text-[1.5rem] font-semibold border border-2 active:opacity-50 transition-opacity duration-150 px-4 py-3 rounded-sm border-lime-300">
                        <a href="#about_forum">Про форум</a></button>
                </div>
                <p class="text-amber-50 font-semibold text-2xl mt-6 text-center">або <button x-data="" @click="$dispatch('set-open')" class="underline decoration-2 decoration-amber-500">Увійдіть в кабінет</button></p>
            </div>
            <div class="lg:max-w-[700px]">
                <img width="100%" src="{{asset('images/OIG.dK.WNIiG0viDOUL.jpeg')}}" alt="">
            </div>
        </section>
        <div class="container px-4 md:px-0 mx-auto mt-[100px]" id="about_forum">
            <p class="text-[40px] md:text-[56px] bg-amber-100 w-fit ps-4 pe-[100px] font-bold">Про форум</p>
            <p class="text-center mt-10 text-[20px] text-gray-200">Форум ХДП - це християнський форум дитячих працівників.</p>
            <p class="text-center mt-2 text-[20px] text-gray-200">Тут ви зможете почути пізнавальні лекції, взяти участь в цікавих практикумах
                <br> і, насамперед, духовно збагатитись.</p>
            <p class="text-center mt-2 text-[20px] text-gray-200">Приємна атмосфера, дружній колектив та coffee break'и гарантують позитивні емоції та спогади:)</p>
            <ul class="text-center mt-5 text-[20px] md:text-[24px] text-amber-50">
                <li class="flex items-center justify-center">
                    <div>
                        <svg width="40px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#c7c7c7}</style><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                    </div>
                    <span>Дата проведення: 03.11 - 04.11</span>
                </li>
                <li class="flex items-center justify-center mt-3">
                    <div><svg width="40px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#c7c7c7}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg></div>
                    <span>Місце: м.Дубно</span>
                </li>
            </ul>
        </div>
        <div class="container mx-auto mt-[100px]" id="sign_up">
            <div class="flex px-4 md:px-0 gap-3 flex-col lg:flex-row">
                <form id="register_user" class="py-10 basis-1 lg:basis-1/2 order-2" method="POST" action="{{'register'}}">
                    @csrf
                    <p class="text-center text-amber-50 text-[40px] md:text-[54px] font-bold">Реєстрація</p>
                    <div class="mt-8 input-container">
                        <x-text-input type="text" id="name_inp" name="name" placeholder="Ваше ім'я та прізвище"></x-text-input>
                    </div>
                    <div class="mt-10 input-container">
                        <x-text-input type="tel" name="phone" id="phone_input" placeholder="Номер телефону"></x-text-input>
                    </div>
                    <div class="mt-10 input-container">
                        <x-text-input type="password" id="password_inp" name="password" placeholder="Пароль"></x-text-input>
                    </div>
                    <div class="mt-8 ps-3 relative group">
                        <input type="checkbox" class="animate-pulse w-[20px] h-[20px]" name="include_sleep_place" id="include_sleep_place">
                        <label class="ms-3 text-amber-50 text-[18px]">Потрібен нічліг</label>
                        <p class="text-gray-400">Якщо ви плануєте приїхати за день до початку і вам потрібен нічліг натисніть на галочку!!!</p>
                    </div>
                    <div class="mx-auto w-fit mt-8">
                        <button class="bg-transparent text-[20px] font-semibold text-center text-amber-50 border w-[220px] py-4 border-amber-50">Зареєструватись</button>
                    </div>
                </form>
                <div class="bg-[#ac0940] basis-1 order-1 lg:basis-1/2 pt-6 pb-8 px-6">
                    <p class="text-amber-50 text-[34px] sm:text-[40px] font-bold">Важлива інформація!!!</p>
                    <p class="text-gray-300 mt-4 font-medium text-[18px]">Перед початком реєстрації уважно прочитайте інформацію нижче</p>
                    <ul class="mt-4 text-[16px] md:text-[20px] text-amber-50">
                        <li class="flex mb-3 items-center">
                            <div class="w-[36px] min-w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/bill.png')}}" alt="">
                            </div> Вартість - 500 грн. за 2 дні(проте якщо у вас коштів немає, всеодно реєструйтесь та приїжджайте)</li>
                        <li class="flex mb-3 items-center relative">

                            <div class="w-[36px] min-w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/slumber.png')}}" alt="">
                            </div> <span>Якщо ви плануєте приїхати на форум за день до початку і вам потрібне місце для ночівлі, натисніть галочку <strong><i>"Потрібен нічліг"</i></strong></span></li>
                        <li class="flex items-center">
                            <div class="w-[36px] min-w-[36px] flex items-center h-[36px] bg-[#FFE3E8] me-4 ver p-[6px] rounded-full">
                                <img height="100%" src="{{asset('images/clipboard.png')}}" alt="">
                            </div>
                            <div>У кожного учасника форуму є завдання, які потрібно зробити до початку форуму.
                                <ul class="ps-10 list-decimal">
                                    <li>Детально ознайомтесь зі всіма біблійними текстами про Мойсея</li>
                                    <li>Підготуйте участь на зібрання</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <p class="text-yellow-200 font-bold text-[20px] mt-4">Дата реєстрації: 15.10 - 30.10. К-сть учасників - 70. Встигніть зареєструватись.</p>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-[100px] px-4 md:px-0" id="contacts">
            <p class="text-[40px] md:text-[56px] bg-amber-100 w-fit ps-4 pe-[100px] font-bold">Контакти</p>
            <p class="mt-10 font-bold text-[24px] md:text-[32px] text-gray-200">Якщо у вас виникли питання можете звертатись за номером телефону: +380681017742</p>
        </div>
        @include('auth.login-modal')
    </x-slot>
    <x-slot name="body_scripts">
    </x-slot>
</x-app-layout>
