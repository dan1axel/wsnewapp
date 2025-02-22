<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - FitQuest</title>
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans bg-gray-100">

    <header class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold">FitQuest</h1>
            <nav>
                <a href="/" class="text-white hover:text-blue-300 mx-4">Home</a>
                <a href="/about" class="text-white hover:text-blue-300 mx-4">About Us</a>
                <a href="/contact" class="text-white hover:text-blue-300 mx-4">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center mt-10">
        <p>&copy; 2025 FitQuest. All rights reserved.</p>
    </footer>

</body>
</html>
