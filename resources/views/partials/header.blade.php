<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between px-4 py-3">
        
        <!-- Logo (fixed width) -->
        <div class="flex-shrink-0 w-[160px]">
            <a href="#">
                <img src="{{ asset('logo_bg.png') }}" class="h-8 w-auto" alt="PocketCap Logo">
            </a>
        </div>

        <!-- Navigation Menu -->
        <div class="flex-1 flex justify-center">
            <ul class="flex space-x-8 text-sm font-medium">
                <li><a href="#" class="text-blue-600">Home</a></li>
                <li><a href="#" class="text-gray-900 hover:text-blue-600">About</a></li>
                <li><a href="#" class="text-gray-900 hover:text-blue-600">Services</a></li>
                <li><a href="#" class="text-gray-900 hover:text-blue-600">Contact</a></li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center space-x-3">
            <a href="/dashboard" class="px-4 py-2 border text-sm border-gray-400 text-gray-400 rounded hover:border-gray-700 hover:text-gray-700">
                Dashboard
            </a>
            <button class="text-white bg-[#1C75BC] hover:bg-[#f7941e] font-semibold rounded px-4 py-2 text-sm">
                Get started
            </button>
        </div>
    </div>
</nav>
