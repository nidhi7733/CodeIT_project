<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header class="sticky top-0">
        <x-navbar />
    </header>
    <main>
        {{$slot}}
    </main>
    <footer>
        <x-frontend-footer />
    </footer>
</body>
</html><div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
