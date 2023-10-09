@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full text-[18px] font-medium text-amber-50 placeholder-amber-50 bg-transparent border-0 border-b-2 focus:outline-0 focus:border-0 focus:ring-amber-100 border-amber-50']) !!}>
