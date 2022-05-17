<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="raw ">
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
   
    <x-guest-layout class="d-flex justify-content-center content">
        <x-jet-authentication-card >
            <x-slot name="logo" class="d-flex justify-content-center">
                <img src="https://drive.google.com/uc?id=1C0Yjwn-UuZwysi4UalYrSgA8qbQWs3PB" height="10%">
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}" >
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href-"/css/admin custom.css">
<link rel="stylesheet" href="../css/app.css">


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
   $(document).ready(function() {
      $('#todos').DataTable();
   } );

   $(window).on("load",function(){
        $(".loader-wrapper").fadeOut(2000,"linear");
    });
 
</script>
<script> console.log('Hi!'); </script>
<style>

    .content{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display:flex;
        justify-content: center;
        align-items: center;
        background-color: #242f3f;
    }
  .loader-wrapper {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #242f3f;
    display:flex;
    justify-content: center;
    align-items: center;
  }
  .loader {
    display: inline-block;
    width: 30px;
    height: 30px;
    position: relative;
    border: 4px solid #Fff;
    animation: loader 2s infinite ease;
  }
  .loader-inner {
    vertical-align: top;
    display: inline-block;
    width: 100%;
    background-color: #fff;
    animation: loader-inner 2s infinite ease-in;
  }
  
  @keyframes loader {
    0% { transform: rotate(0deg);}
    25% { transform: rotate(180deg);}
    50% { transform: rotate(180deg);}
    75% { transform: rotate(360deg);}
    100% { transform: rotate(360deg);}
  }
  
  @keyframes loader-inner {
    0% { height: 0%;}
    25% { height: 0%;}
    50% { height: 100%;}
    75% { height: 100%;}
    100% { height: 0%;}
  }

</style>
