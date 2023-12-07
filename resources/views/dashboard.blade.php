<!DOCTYPE html>
<html lang="pl-PL">
    @include('partials.head')
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2>Zalogowano</h2>
</div>
</body>
</html>

