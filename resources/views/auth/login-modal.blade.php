<div
    x-data="{ openModal: false, top: 'bottom-0' }"
    x-ref="modalWindow"
    @set-open.window="openModal = !openModal"
    x-show="openModal"
    x-cloak
    x-transition.duration.500ms
    class='bg-opacity-10 w-full h-full bg-neutral-100 z-10 top-0 fixed flex items-center justify-center'
>
    <div class="bg-neutral-900 p-10 px-5 w-fit max-w-[100%]" @click.outside="openModal = !openModal">
        <form id="login_user" class="py-10 max-w-[100%] w-[600px]" method="POST" action="{{'login'}}">
            <p class="text-center text-amber-50 text-[40px] md:text-[54px] font-bold">Вхід в кабінет</p>
            <div class="mt-10 input-container">
                <x-text-input type="tel" name="phone" id="phone_login_input" placeholder="Номер телефону"></x-text-input>
            </div>
            <div class="mt-10 input-container">
                <x-text-input type="password" id="password_login_inp" name="password" placeholder="Пароль"></x-text-input>
            </div>
            <div class="mx-auto w-fit mt-8">
                <button class="bg-transparent text-[20px] font-semibold text-center text-amber-50 border w-[220px] py-4 border-amber-50">Вхід</button>
            </div>
        </form>

    </div>
</div>
