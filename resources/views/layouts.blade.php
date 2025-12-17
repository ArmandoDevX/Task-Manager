<!-- resources/views/layouts/app.blade.php -->
<html lang="pt" class="dark">
<head>
    <meta charset="UTF-8">
    <title>App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 p-6 lg:p-8">
    @yield('content')
    @livewireScripts
</body>
</html>
