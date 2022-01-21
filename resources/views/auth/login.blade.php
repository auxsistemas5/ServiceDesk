<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="raw ">

    <x-guest-layout >
        <x-jet-authentication-card>
            <x-slot name="logo">
                <img src="https://www.hmfs.gov.co/wp-content/uploads/2021/08/LOGO-ENCABEZADOFF-8.png" >
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                {{--<div>
                    <x-jet-label for="email" value="{{ __('Correo') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>--}}
                <div>
                    <x-jet-label for="username" value="{{ __('Usuario') }}" />
                    <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                
                <x-jet-button class="justify-content-center form-control mt-2">
                    {{ __('Entrar') }}
                </x-jet-button>
                <!--
                @if (Route::has('password.request'))
                    <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Recuperar Contraseña') }}
                    </a>
                @endif-->
    
                
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
