<x-guest-layout>
    @section('css')
        <link rel="stylesheet" href="{{asset('css/estilos-login.css')}}">
    @endsection
    
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <main class="main">
            
            <div class="contenedor-login p-2">
                
                
                <img class="mi-estilo-fondo-login" src="img/img_login.jpg" alt="">
                <div class="container login p-2 text-center">
                    <x-jet-validation-errors class="mb-4" />
                    <figure class="text-center p-2">
                        <img src="img/LOGO2.png" alt="">
                    </figure>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input class="mi-estilo-input-login" type="text" name="email" id="email" placeholder="email" required>
                        <input class="mi-estilo-input-login" type="password" name="password" id="password" placeholder="password" required>
                        
                        <button type="submit" class="mi-estilo-btn-login ">INICIAR SESION</button>
                        <p class="mt-3 text-center"><a href="#">Olvidaste tu contraseña?</a> <br> <span>   ó </span></p>
                        <p class="mt-3 text-center"><a href="{{ route('register') }}">Registrate</a></p>
                    </form>
                    
                </div>
            </div>
    
        </main>










        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}
    
</x-guest-layout>
