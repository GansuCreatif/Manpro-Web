<div class="max-w-md w-full mx-auto p-6">
    <!-- Login Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
        <!-- Header with Branding -->
        <div class="bg-indigo-600 py-6 px-8 text-center">
            <div class="flex justify-center mb-2">
                <img src="https://placehold.co/40x40/indigo/white?text=MP"
                    alt="ManPro logo showing the initials MP in white on indigo background" class="h-10">
            </div>
            <h1 class="text-2xl font-bold text-white">ManPro by KAI Properti</h1>
            <p class="text-indigo-100 mt-1">Project Management System</p>
        </div>

        <!-- Login Form -->
        <form class="p-8" method="POST" action="{{ route('login.custom') }}">
            <div class="space-y-6">
                <!-- NIPP Field -->
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-6 w-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Kepala -->
                                <path d="M12 4a4 4 0 110 8 4 4 0 010-8z" />
                                <!-- Badan -->
                                <path d="M4 20c0-4 4-6 8-6s8 2 8 6v1H4v-1z" />
                            </svg>
                        </div>
                        <input id="nipp" name="nipp" type="text" pattern="[0-9]*"
                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 border"
                            placeholder="NIPP" maxlength="20" required>
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 border"
                            placeholder="Password">
                    </div>
                </div>
                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
    </div>
