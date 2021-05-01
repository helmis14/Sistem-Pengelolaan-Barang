<div class="h-32 md:h-auto md:w-1/2">
@switch(Route::currentRouteName())
    @case(Route::currentRouteName() == 'register')
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('assets/img/login-office1.jpg') }}" alt="Office" />
    @break
    @case(Route::currentRouteName() == 'password.request')
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('assets/img/login-office1.jpg') }}" alt="Office" />
    @break
    @default()
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('assets/img/login-office1.jpg') }}" alt="Office" />
@endswitch
</div>

<div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
    <div class="w-full">
        {{ $slot }}
    </div>
</div>

