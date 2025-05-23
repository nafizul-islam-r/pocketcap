<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Confirm Password</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 dark:bg-gray-900">

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset('logo_bg.png') }}" class="h-20" alt="PocketCap Logo" />
        </a>

        <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-6 sm:p-8">

                <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Confirm Password
                </h1>

                <p class="text-sm text-gray-600 dark:text-gray-300">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>

                <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                                      dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none 
                                   focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                                   dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Confirm
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
