<header class="text-gray-600 body-font bg-indigo-200">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('home.index') }}" class="{{ request()->routeIs('home.*') ? 'active' : ''}} font-medium tracking-widest hover:text-white md:mx-4 md:my-0">Home</a>
            <a href="{{ route('events.index') }}" class="{{ request()->routeIs('events.*') ? 'active' : ''}} font-medium tracking-widest hover:text-white md:mx-4 md:my-0">Events</a>
        </nav>

        <div class="justify-around px-4">
            @auth
            <a href="{{ route('logout') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log Out
            </a>
            @endauth

            @guest
            <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log In
            </a>
            <a href="{{ route('register') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Register
            </a>
            @endguest
        </div>

    </div>
</header>