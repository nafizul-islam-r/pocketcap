<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name') . ' | Investment Simplified')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-900 text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    
    <header>
        @extends('partials.header')
    </header>
    
    <section id="hero" class="bg-gray-900 text-white">
        <div class="mt-20 py-20 px-4 mx-auto max-w-screen-xl text-center lg:py-32 lg:px-12">

            <!-- Animated Tag -->
            <span
                class="inline-block animate-fade-in-down delay-100 py-1 px-4 mb-6 text-sm bg-gray-800 text-white rounded-full">
                <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full mr-2">Startup</span>
                PocketCap: Invest in Growth with Trust
            </span>

            <!-- Title -->
            <h1
                class="animate-fade-in-down delay-200 mb-6 text-4xl font-extrabold tracking-tight leading-tight md:text-5xl lg:text-6xl">
                Empowering Ideas with Smart Capital
            </h1>

            <!-- Subtitle -->
            <p class="animate-fade-in-down delay-300 mb-4 text-lg font-medium text-gray-400 max-w-3xl mx-auto">
                PocketCap connects verified candidates with motivated investors — bridging opportunities with trusted
                funding.
            </p>

            <!-- Extra content (value line + benefits) -->
            <p class="animate-fade-in-down delay-400 mb-6 text-base text-gray-400 max-w-2xl mx-auto italic">
                Whether you're launching a startup or looking to grow one — we've got you covered.
            </p>

            <div
                class="animate-fade-in-down delay-500 mb-10 grid gap-4 sm:grid-cols-3 max-w-4xl mx-auto text-sm text-gray-300">
                <div class="bg-gray-800 rounded-lg px-4 py-3">✅ Transparent Funding Process</div>
                <div class="bg-gray-800 rounded-lg px-4 py-3">🤝 Secure Investor-Candidate Match</div>
                <div class="bg-gray-800 rounded-lg px-4 py-3">📈 Track Investments & Equity in One Place</div>
            </div>

            <!-- CTA Button -->
            <div class="animate-fade-in-down delay-600 mb-16">
                <a href="#about"
                    class="inline-block px-6 py-3 text-base font-semibold text-white bg-blue-600 hover:bg-orange-400 rounded-lg transition focus:outline-none focus:ring-4 focus:ring-blue-800">
                    See more
                </a>
            </div>

            <!-- Scroll Down Arrow -->
            <div class="animate-bounce">
                <svg class="mx-auto w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>

        </div>
    </section>

    <section id="about" class="bg-white dark:bg-gray-900 py-10">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Meet Our Team</h2>
                <p class="font-medium text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">
                    We are the team behind PocketCap — bridging funding gaps and empowering startup dreams through
                    transparent investments.
                </p>
            </div>

            <!-- Row 1: 3 Cards -->
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div
                    class="items-center h-44 bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://nafizul-islam-r.github.io/portfolio/">
                        <img style="width: 360px" class=" rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('team/ACID.jpg') }}"
                            alt="ACID Avatar" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="https://nafizul-islam-r.github.io/portfolio/">ACID</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CEO & Lead Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">ACID is a maniac about developing Web Applications.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="items-center h-44 bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="width: 400px" class=" rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('team/Razib.jpg') }}"
                            alt="Razib Avatar" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Mursalin</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Business Analyst</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Razib loves new business ideas and empowers people daily.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="items-center h-44 bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="width: 300px" class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('team/Jitu.jpg') }}"
                            alt="Jitu Avatar" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Tadbir Tareq</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Graphics Designer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Tadbir is passionate about creative designing and graphical work.</p>
                    </div>
                </div>
            </div>

            <!-- Row 2: 2 Cards Centered -->
            <div class="grid gap-8 md:grid-cols-2 justify-center max-w-4xl mx-auto">
                <!-- Card 4 -->
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="width: 500px" class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('team/Abirata.jpg') }}"
                            alt="Abirata Avatar" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Abirata</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Member</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Abirata is very passionate with problem solving and competitive programming.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="width: 450px" class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('team/Rion.jpg') }}"
                            alt="Rion Avatar" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Ridoan</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Member</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Ridoan expertize is collecting and Data collecting and Analyzing them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="bg-gray-900 text-white py-40">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold mb-4 text-white">What We Provide</h2>
                <p class="font-medium text-gray-400 text-lg max-w-2xl mx-auto">
                    We’re committed to offering a safe and empowering peer-to-peer environment where business ideas meet
                    funding — all under complete transparency and control.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Candidate Card -->
                <div
                    class="bg-gray-800 rounded-xl shadow-lg p-6 transition hover:-translate-y-2 hover:shadow-2xl duration-300">
                    <div class="h-40 w-full bg-[#1C75BC] rounded-md flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">For Candidates</h3>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc pl-5">
                        <li>Apply for funding with your business idea — no middlemen.</li>
                        <li>Retain control by offering equity on your terms.</li>
                        <li>All applications are securely verified and fully traceable.</li>
                    </ul>
                </div>

                <!-- Investor Card -->
                <div
                    class="bg-gray-800 rounded-xl shadow-lg p-6 transition hover:-translate-y-2 hover:shadow-2xl duration-300">
                    <div class="h-40 w-full bg-[#1C75BC] rounded-md flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">For Investors</h3>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc pl-5">
                        <li>Access pre-verified, real business proposals from ambitious minds.</li>
                        <li>Invest safely, transparently, and track your returns with confidence.</li>
                        <li>We take care of the validation, you focus on the vision.</li>
                    </ul>
                </div>

                <!-- Admin Card -->
                <div
                    class="bg-gray-800 rounded-xl shadow-lg p-6 transition hover:-translate-y-2 hover:shadow-2xl duration-300">
                    <div class="h-40 w-full bg-[#1C75BC] rounded-md flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">For the Platform</h3>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc pl-5">
                        <li>All users are manually verified — no room for fraud or spam.</li>
                        <li>Admins review, approve, and maintain fairness across the system.</li>
                        <li>We ensure a secure and reliable experience for every stakeholder.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="bg-gray-900 text-white py-20 px-4 max-w-screen-xl mx-auto">
        <h2 class="text-4xl font-extrabold mb-12 text-center">
            Frequently Asked Questions
        </h2>

        <div class="space-y-8 max-w-3xl mx-auto">
            <div>
                <h3 class="text-xl font-semibold mb-2">How do I apply for funding as a candidate?</h3>
                <p class="text-gray-400">Simply create an account, complete your profile with your business details,
                    and submit your funding application. Our team will verify your submission before it goes live for
                    investors.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">What documents do I need to provide?</h3>
                <p class="text-gray-400">Candidates need to upload valid identification (e.g., NID or passport) and a
                    detailed business proposal. Investors should provide bank statements and verification documents.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">How can investors be sure their investments are safe?</h3>
                <p class="text-gray-400">All candidates are manually verified to minimize risk. We also provide
                    transparent tracking of your investment returns through our platform.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">Can I offer equity to multiple investors?</h3>
                <p class="text-gray-400">Yes, you can specify the equity percentage you’re willing to offer, and
                    investors can invest accordingly.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">How long does the verification process take?</h3>
                <p class="text-gray-400">Verification usually takes 1-3 business days, depending on the volume of
                    applications.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">What fees does PocketCap charge?</h3>
                <p class="text-gray-400">A nominal application fee is charged per loan application. Additionally, a
                    3-5% commission is taken from investor returns as a service fee.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">What happens if my application is rejected?</h3>
                <p class="text-gray-400">You will receive detailed feedback and can revise and resubmit your
                    application.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">How can I contact support if I have questions?</h3>
                <p class="text-gray-400">You can reach out via our Contact page or email support@pocketcap.com for
                    assistance.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact
                Us</h2>
            <p class="mb-8 lg:mb-16 font-medium text-center text-gray-500 dark:text-gray-400 sm:text-xl">Want to know
                more or facing any problems? Reach out to us! We're here to help you out anytime!</p>
            </p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Send message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <footer class="w-full bg-gray-900 text-white border-t border-gray-700 pt-2 -mb-5">
        @extends('partials.footer')
    </footer>

</body>
</html>
