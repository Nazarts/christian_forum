<div x-data class="sticky top-[80px] text-[18px] text-amber-50 z-10 font-semibold max-w-[500px] flex flex-col gap-3 right-0 me-10 ms-auto">
    @foreach($errors->all() as $idx=>$error)
        <p x-data="{open: true, time_duration: 3000 + {{ (sizeof($errors->all()) - $idx - 1) * 100 }}}"
           x-show="open" x-init="setTimeout(() => {open = !open}, time_duration)"
           x-transition:leave="transition ease-in duration-300"
           x-transition:leave-start="opacity-100 scale-100"
           x-transition:leave-end="opacity-0 scale-90"
           class="bg-amber-800 py-3 rounded-lg px-4">{{$error}}</p>
    @endforeach
</div>
