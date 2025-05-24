<style>
    .user-sidebar {
        display: grid;
        grid-template-columns: 15% 85%;
    }
</style>


<title>@yield('title', config('app.name') . ' | User Dashboard')</title>
<x-app-layout>

    <div class="admin-sidebar">
        <div class="">
            @include('layouts.sidebar-u')

        </div>

        <div>
            @include('candidate_profiles.create')
        </div>





</x-app-layout>
