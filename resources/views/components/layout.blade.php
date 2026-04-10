<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Umbrella Admin Panel' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <x-sidebar />

        <div class="flex flex-col flex-1 w-full">
            <x-header />

            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </div>
</body>
</html>