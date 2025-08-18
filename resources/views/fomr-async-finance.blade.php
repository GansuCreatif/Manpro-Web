<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ManPro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <!-- Navbar -->
    @include('sections.section-navbar')

    <!-- Sidebar -->
    @include('sections.section-sidebar')

    <!-- Main layout -->
    <div class="flex pt-16 min-h-screen">
        <div id="main-wrapper" class="flex-1 flex flex-col transition-all duration-300 ml-64">

            <main id="main-content" class="flex-1 p-6">
                <h1 class="text-blue-900 mb-5 pt-2 text-3xl">Project Sync SAP</h1>
                <!-- Form Cost -->
                @include('components.forms.form-async-finance')
                <!-- Footer -->
                @include('sections.section-footer')
            </main>
        </div>
    </div>
</body>

</html>
