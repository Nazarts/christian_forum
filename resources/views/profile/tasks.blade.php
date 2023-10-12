@extends('profile.layouts.profile')

@section('content')
    <div class="px-10 flex-1">
        <p class="text-center text-amber-50 text-[52px]">Завдання</p>
        <p class="text-lime-300 text-[20px] font-semibold md:text-[24px] text-center mt-8">Тут ви можете переглянути присвоєні вам завдання.</p>
        <div class="tasks-list">
            @include('profile.partials.task', ['content' => 'Вам потрібно детально дослідити всі біблійні тексти про Мойсея', 'title' => 'Дослідити історію про Мойсея'])
            @include('profile.partials.task', ['content' => 'Вам потрібно завчасно підготувати участь на зібрання яке відбудеться в пт. 03.11', 'title' => 'Підготуватись до зібрання'])
        </div>
    </div>
@endsection
