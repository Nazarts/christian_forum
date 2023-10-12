@extends('profile.layouts.profile')

@section('content')
    <form class="flex-1 mt-4 ps-2 md:px-10" method="POST" action="{{route('profile.update')}}">
                @csrf
                @method('put')
                <p class="text-center text-amber-50 text-[52px]">Профіль</p>
                <p class="text-lime-300 text-[20px] font-semibold md:text-[24px] text-center mt-8">Це ваш особистий кабінет. Тут ви можете змінити ваші дані та переглянути присвоєні вам завдання.</p>
                <div class="mt-10 info-page">
                    @error('name')
                    <p class="info-page__item__error bg-amber-800 font-semibold text-[20px] pe-8 ps-3 py-2">{{$message}}</p>
                    @enderror
                    <p class="w-fit mx-auto md:mx-0 info-page__item mb-6 flex gap-3 items-center text-[16px] md:text-[22px] text-amber-50">
                        <span>Ім'я:</span>
                        <input name="name" required autocomplete="off" class="text-[16px] md:text-[22px] font-semibold bg-transparent border-b-2 border-0 border-b-amber-50" value="{{$user->name}}" type="text">
                    </p>
                    @error('email')
                        <p class="info-page__item__error bg-amber-800 font-semibold text-[20px] pe-8 ps-3 py-2">{{$message}}</p>
                    @enderror
                    <p class="w-fit mx-auto md:mx-0 info-page__item mb-6 flex gap-3 items-center text-[16px] md:text-[22px] text-amber-50">
                        <span>Пошта:</span>
                        <input name="email" autocomplete="off" class="text-[16px] md:text-[22px] font-semibold bg-transparent border-b-2 border-0 border-b-amber-50" value="{{$user->email}}" type="text">
                    </p>
                    @error('phone')
                    <p class="info-page__item__error bg-amber-800 font-semibold text-[20px] pe-8 ps-3 py-2">{{$message}}</p>
                    @enderror
                    <p class="w-fit mx-auto md:mx-0 info-page__item mb-6 flex gap-3 items-center text-[16px] md:text-[22px] text-amber-50">
                        <span>Номер телефону:</span>
                        <input name="phone" id="phone_input" required autocomplete="off" class="text-[16px] md:text-[22px] font-semibold bg-transparent border-b-2 border-0 border-b-amber-50" value="{{$user->phone}}" type="tel">
                    </p>
                    <div class="w-fit mx-auto md:mx-0 info-page__item mb-6 flex gap-3 items-center text-[16px] md:text-[22px] text-amber-50">
                        <p class="max-w-[400px]">Якщо ви плануєте приїхати напередодні форуму і вам потрібно переночувати, натисніть галочку</p>
                        <input type="checkbox" @if($user->include_sleep_place) checked @endif class="animate-pulse w-[30px] h-[30px]" name="include_sleep_place" id="include_sleep_place">
                    </div>
                </div>
                <div class="mt-10 w-fit mx-auto md:mx-0">
                    <button class="border-amber-50 active:bg-opacity-10 active:bg-white border py-4 px-6 text-amber-50 text-[20px]">Зберегти зміни</button>
                </div>
            </form>
@endsection
