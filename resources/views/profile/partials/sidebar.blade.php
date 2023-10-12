<div style="align-self: start" class="flex md:block user items-center md:items-start justify-between mt-[50px] w-[100%] md:w-[300px] py-4 px-5 md:p-5 rounded-lg bg-[#242527]">
    <div class="user__info items-center w-fit hidden md:flex gap-4">
        <div class="user__ico bg-white rounded-full w-[52px] overflow-hidden border-lime-400">
            <img src="{{asset('images/person.png')}}" alt="">
        </div>
        <p class="hidden md:block text-gray-300 font-bold text-[24px] w-fit">{{$user->name}}</p>
    </div>
    <div class="user__links md:mt-5 flex flex-row md:flex-col flex-1 justify-between gap-3">
        <div class="user__info items-center w-fit flex md:hidden gap-4">
            <div class="user__ico bg-white rounded-full w-[40px] overflow-hidden border-lime-400">
                <img src="{{asset('images/person.png')}}" alt="">
            </div>
            <p class="hidden md:block text-gray-300 font-bold text-[24px] w-fit">{{$user->name}}</p>
        </div>
        <a href="{{route('profile')}}">
            <p class="text-amber-50 justify-center md:justify-start rounded-lg px-1 md:px-4 py-3 hover:bg-opacity-10 bg-opacity-0 bg-white text-[20px] gap-3 font-semibold flex">
                <img style="height: 30px; padding-left: 2px; max-width: none" src="{{asset('images/resume.png')}}" alt=""> <span class="hidden md:inline">Профіль</span>
            </p>
        </a>
        <a href="{{route('profile.tasks')}}">
            <p class="text-amber-50 justify-center md:justify-start px-1 md:px-4 py-3 text-[20px] hover:bg-opacity-10 bg-opacity-0 bg-white rounded-lg gap-3 font-semibold flex">
                <img style="height: 30px; width: 30px" src="{{asset('images/clipboard-white.png')}}" alt=""> <span class="hidden md:inline">Завдання</span>
            </p>
        </a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="w-full text-amber-50 justify-center md:justify-start px-1 md:px-4 py-3 text-[20px] hover:bg-opacity-10 bg-opacity-0 bg-white  rounded-lg gap-3 font-semibold flex">
                <img style="height: 30px" src="{{asset('images/power-off.png')}}" alt=""> <span class="hidden md:inline">Вийти</span>
            </button>
        </form>
    </div>
</div>
