<nav x-data="{openNav: false}" class="bg-opacity-[.01] bg-white py-3 px-10 flex flex-col md:flex-row justify-between">
    <ul class="hidden md:flex items-center gap-5 lg:gap-6 text-[18px] text-amber-50 font-semibold">
        <li class="relative"><a href="/" class="">Головна</a></li>
        <li><a href="{{route('main', '#about_forum')}}">Про форум</a></li>
        <li><a href="{{route('main', '#contacts')}}">Контакти</a></li>
        <li><a href="{{route('profile')}}">Особистий кабінет</a></li>
    </ul>

    <div class="flex justify-between md:hidden ">
        <div class="burger mt-4 mb-4 w-[30px] cursor-pointer" @click="openNav = !openNav">
            <div class="border-b-2 border-white mb-2"></div>
            <div class="border-b-2 border-white mb-2"></div>
            <div class="border-b-2 border-white mb-2"></div>
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="me-0 md:me-5 bg-neutral-100 py-3 px-5 font-bold rounded-full">Вийти</button>
            </form>
        @else
            <button x-data="" @click="$dispatch('set-open')" class="bg-neutral-100 px-5 py-3 sticky top-0 decoration-2 decoration-amber-500">Увійти в кабінет</button>
        @endif
    </div>

    <ul x-show="openNav"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-0"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-0"
        class="flex flex-col md:hidden gap-5 lg:gap-6 text-[18px] text-amber-50 font-semibold">
        <li class="relative"><a href="{{route('main')}}" class="">Головна</a></li>
        <li><a href="">Про форум</a></li>
        <li><a href="">Контакти</a></li>
        <li><a href="{{route('profile')}}">Особистий кабінет</a></li>
    </ul>

    @if(\Illuminate\Support\Facades\Auth::check())
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="hidden md:block me-0 md:me-5 bg-neutral-100 py-3 px-5 font-bold rounded-full">Вийти</button>
        </form>
    @else
        <div class="hidden md:block md:max-w-[300px] mt-10 md:mt-0 lg:max-w-[800px] overflow-hidden">
            <p class="text-lime-300 relative text-[20px] md:text-[24px] whitespace-nowrap animate-textTranslate">Увага, встигніть зареєструватись. Дата закінчення реєстрації - <strong>30.10.2023</strong>. Кілкість учасників обмежена!!!</p>
        </div>
    @endif
</nav>
