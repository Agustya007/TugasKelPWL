<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex">

    {{-- Sidebar --}}
    @include('components.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- Header --}}
        @include('components.header')

        {{-- Content --}}
        <main class="p-6 flex-1">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('components.footer')

    </div>
</div>

</body>
</html>