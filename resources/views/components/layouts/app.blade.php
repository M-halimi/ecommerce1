<!-- resources/views/components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Layout</title>
    @livewireStyles
</head>
<body>
   
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
</body>
</html>
