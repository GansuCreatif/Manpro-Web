<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ManPro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <!-- Main layout -->
    <div class="flex pt-16 min-h-screen">
        <div id="main-wrapper" class="flex-1 flex flex-col transition-all duration-300 ml-0">

            <main id="main-content" class="flex-1 p-6">
                <!-- Memanggil komponen Login -->
                <x-login.login-page />
            </main>

            <!-- Footer -->
            @include('sections.section-footer')
        </div>
    </div>
</body>

</html>
