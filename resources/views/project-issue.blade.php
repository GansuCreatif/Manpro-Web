<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ManPro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    @include('sections.section-navbar')

    <!-- Sidebar -->
    @include('sections.section-sidebar')

    <!-- Main layout -->
    <div class="flex pt-16 min-h-screen">
        <div id="main-wrapper" class="flex-1 flex flex-col transition-all duration-300 ml-64">

            <main id="main-content" class="flex-1 p-6">
                <h1 class="text-3xl font-bold mb-4 text-blue-400">Project Issue</h1>
                <x-project-list.project-table :projects="$projects" />
            </main>

            <!-- Footer -->
            @include('sections.section-footer')
        </div>
    </div>
</body>

</html>
