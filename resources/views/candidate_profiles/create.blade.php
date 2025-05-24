<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PocketCap | Be a Candidate</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">

    <div class="max-w-4xl bg-gray-900 mx-auto  p-8 rounded-md shadow-md">
        <h1 class="text-2xl text-white font-semibold text-center mb-8">Candidate Application</h1>

        <form action="{{ route('candidate-profiles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                {{-- Name --}}
                <div class="w-full">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your name" required="">
                </div>
                {{-- Phone --}}
                <div class="w-full">
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                    <input type="text" name="phone" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your phone" required="">
                </div>
                {{-- Email --}}
                <div class="w-full">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your email" required="">
                </div>
                {{-- Date of birth --}}
                <div class="w-full">
                    <label for="dob"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="date" name="dob" id="dob"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your Date of Birth" required="">
                </div>
                {{-- Fathers name --}}
                <div class="w-full">
                    <label for="father_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fathers Name</label>
                    <input type="text" name="father_name" id="father_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your Fathers Name" required="">
                </div>
                {{-- Mothers name --}}
                <div class="w-full">
                    <label for="mother_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mothers Name</label>
                    <input type="text" name="mother_name" id="mother_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your Mothers Name" required="">
                </div>
                {{-- Present address --}}
                <div class="sm:col-span-2">
                    <label for="present_address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Present Address</label>
                    <textarea name="present_address" id="present_address" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter Present Adress"></textarea>
                </div>

                {{-- Parmanent address --}}
                <div class="sm:col-span-2">
                    <label for="permanent_address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parmanent Address</label>
                    <textarea name="permanent_address" id="permanent_address" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter Parmanent Address"></textarea>
                </div>

                {{-- Profession  --}}
                <div class="w-full">
                    <label for="profession"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profession</label>
                    <input type="text" name="profession" id="profession"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your Current Profession" required="">
                </div>

                {{-- Company --}}
                <div class="w-full">
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" name="company" id="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Current Workplace" required="">
                </div>

                {{-- Business Interest --}}
                <div class="w-full">
                    <label for="business_interest"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Interest</label>
                    <input type="business_interest" name="business_interest" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Tell About Your Business Interest" required="">
                </div>

                {{-- NID or Passport No --}}
                <div class="w-full">
                    <label for="nid_passport_number"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NID or Passport No</label>
                    <input type="text" name="nid_passport_number" id="nid_passport_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your NID or Passport No" required="">
                </div>


                {{-- NID/Passport Photo /File upload --}}
                <div class="w-full">
                    <label for="nid_passport_photo"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NID/Passport Image</label>
                    <input type="file" name="nid_passport_photo" id="nid_passport_photo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Upload Your Nid or Passport Photo" required="">
                </div>


            </div>
            <div class="text-center">
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-orange-400">
                Submit
            </button>
            </div>
        </form>
    </div>
</body>

</html>




