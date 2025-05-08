<div>
    <header class="p-5">
        <nav>
            <div class="flex justify-between">
                <div class="flex">
                    <ul class="flex align-center gap-5">
                        <img class="w-6 h-6" src="{{ asset('storage/check.png') }}" alt="Imagen">
                        <li><a href="/">Task Manager</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <ul class="flex align-center gap-5">
                        <li class=""><a href="{{route ('login') }}">Login</a></li>
                        <li class=""><a class="border border-solid border-black p-2 px-5 rounded-3xl hover:bg-black hover:text-white transition duration-200" href="{{route ('register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>