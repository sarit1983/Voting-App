<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open_Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
      <header class="flex items-center justify-between px-8 py-4">
      <a href="#"><img src="img/logo.svg" alt="" ></a>
      <div class="flex items-center">
      @if (Route::has('login'))
      
                <div class=" top-0 right-0 px-6 py-4">
                    @auth
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf
    
                        <a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" >
                                            <div class="text-sm">Log Out</div>
            
                    </a>
                    </form>
                    @else
                   <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        @endauth
                </div>
            @endif

      <a href="#">
      <img src="img/avatar.jpg" alt="avatar" class="w-10 h-10 rounded-full"></a></div>
      </header>
      <main class="flex container mx-auto max-w-custom">
          <div class="w-70 mr-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus itaque fugit adipisci pariatur excepturi quasi voluptate dolorum numquam molestias consectetur. Rem error repellendus vero nesciunt, nisi sapiente deserunt laborum eligendi.
          </div>
          <div class="w-175">
          <nav class="flex items-center justify-between text-xs">
          <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
            <li><a href="#" class="text-gray-400 border-b-4 pb-3 transition duration:150 ease-in hover:border-blue hover:text-gray-500">Considering (6)</a></li>
            <li><a href="#" class="text-gray-400 border-b-4 pb-3 transition duration:150 ease-in hover:border-blue hover:text-gray-500">In Progress (1)</a></li>
          </ul>

          <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a href="#" class="text-gray-400 border-b-4 pb-3 transition duration:150 ease-in hover:border-blue hover:text-gray-500">Implemented (10)</a></li>
            <li><a href="#" class="text-gray-400 border-b-4 pb-3 transition duration:150 ease-in hover:border-blue hover:text-gray-500">Closed (3)</a></li>
          </ul>
          </nav>

          <div class="mt-8">
            {{$slot}}
          </div>
        </div>
         
      </main>
       
    </body>
</html>
