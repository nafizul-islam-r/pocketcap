<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Verify Email</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 dark:bg-gray-900">

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset('logo_bg.png') }}" class="h-20" alt="PocketCap Logo" />
        </a>

        <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-6 sm:p-8">
                <h2 class= "text-center text-xl font-bold text-gray-900 dark:text-white">
                    Email Verification Required
                </h2>

                <p class="text-sm text-gray-600 dark:text-gray-300">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
                    If you didn’t receive the email, we’ll gladly send you another.
                </p>

                @if (session('status') === 'verification-link-sent')
                    <div class="text-sm font-medium text-green-600 dark:text-green-400">
                        A new verification link has been sent to your email address.
                    </div>
                @endif

                <div class="flex items-center justify-between mt-6">
                    <!-- Resend Email Form -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit"
                            class="text-white bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none 
                                   focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                                   dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Resend Verification Email
                        </button>
                    </form>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white underline">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
