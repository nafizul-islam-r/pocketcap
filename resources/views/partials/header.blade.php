<style>
    nav {
        background-color: #111827;
        transition: background-color 0.4s ease-in-out;
    }

    nav.scrolled {
        background-color: #030712;
        opacity: 0.98 0.4s ease-in-out;
    }

    #navbar-sticky ul {
        background-color: #111827;
        transition: background-color 0.4s ease-in-out;
    }

    #navbar-sticky ul.scrolled {
        background-color: #030712;
        opacity: 0.98 0.4s ease-in-out;
    }
</style>

<nav class="fixed w-full z-20 top-0 start-0 border-b-0 border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="logo_bg.png" class="h-8" alt="PocketCap Logo">
            </a>
        </div>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @if (Route::has('login') && Auth::check())
                @if (Auth::user()->hasRole('admin'))
                    <a href="{{ url('/admin/dashboard') }}"> 
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-orange-400 dark:focus:ring-blue-800">Dashboard
                        </button>
                    </a>
                @elseif (Auth::user()->hasRole('candidate'))
                    <a href="{{ url('/candidate-profiles/dashboard') }}"> 
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-orange-400 dark:focus:ring-blue-800">Dashboard
                        </button>
                    </a>
                @elseif (Auth::user()->hasRole('investor'))
                    <a href="{{ url('/investor-profiles/dashboard') }}"> 
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-orange-400 dark:focus:ring-blue-800">Dashboard
                        </button>
                    </a>
                @else
                    <a href="{{ url('/dashboard') }}">
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-orange-400 dark:focus:ring-blue-800">Dashboard
                        </button>
                    </a>
                @endif
            @else
                <a href="{{ url('/register') }}">
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-orange-400 dark:focus:ring-blue-800">Get
                        started</button>
                </a>
            @endif
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rnavded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="-ml-20 items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                    </a>
                </li>
                <li>
                    <a href="#services"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services
                    </a>
                </li>
                <li>
                    <a href="#faqs"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQS
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        const menu = document.querySelector(
        '#navbar-sticky ul'); // Explicitly target the <ul> inside #navbar-sticky
        if (window.scrollY > 0) {
            nav.classList.add('scrolled');
            menu.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
            menu.classList.remove('scrolled');
        }
    });
</script>
