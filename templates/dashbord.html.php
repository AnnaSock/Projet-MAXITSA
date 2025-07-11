<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-orange': '#FC7700',
                        'custom-dark': '#120E0E',
                    }
                }
            }
        }
    </script>
</head>
<body class="text-white min-h-screen p-4" style="background-color: #120E0E;">
    <div class="max-w-6xl mx-auto">
        <!-- Header Card -->
        <div class="rounded-3xl p-6 mb-6" style="background-color: #2a2a2a; border: 1px solid #444;">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="flex space-x-1 mr-3">
                            <div class="w-2 h-8 rounded" style="background-color: #FC7700;"></div>
                            <div class="w-2 h-8 rounded" style="background-color: #FC7700;"></div>
                            <div class="w-2 h-8 rounded" style="background-color: #FC7700;"></div>
                        </div>
                        <span class="text-white font-medium text-lg">Principal</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-white text-lg font-semibold">FCFA</span>
                        <span class="text-white text-2xl font-bold">1000000000000</span>
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 01.5-2.556m5.893 7.556a7.5 7.5 0 108.949-8.949"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-white text-xl font-semibold">Anna Khadidiatou Sock</div>
                    <div class="text-2xl font-bold" style="color: #FC7700;">781832623</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column - Action Buttons -->
            <div class="space-y-4">
                <!-- Changer de compte -->
                <div class="rounded-2xl p-4 cursor-pointer transition-all duration-200 hover:scale-105" style="background-color: #2a2a2a; border: 2px solid #FC7700;">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                        <span class="text-white text-lg font-medium">Changer de compte</span>
                    </div>
                </div>

                <!-- Nouveau compte -->
                <div class="rounded-2xl p-4 cursor-pointer transition-all duration-200 hover:scale-105" style="background-color: #2a2a2a; border: 2px solid #FC7700;">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        <span class="text-white text-lg font-medium">Nouveau compte</span>
                    </div>
                </div>

                <!-- Transaction -->
                <div class="rounded-2xl p-4 cursor-pointer transition-all duration-200 hover:scale-105" style="background-color: #2a2a2a; border: 2px solid #FC7700;">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2m-6 4h4"/>
                        </svg>
                        <span class="text-white text-lg font-medium">Transaction</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Historique -->
            <div class="lg:col-span-2">
                <div class="rounded-2xl p-6" style="background-color: #2a2a2a; border: 1px solid #444;">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                            <h2 class="text-white text-xl font-semibold">Historique</h2>
                        </div>
                        <button class="text-white font-bold py-2 px-6 rounded-full text-sm transition-colors duration-200" style="background-color: #FC7700;" onmouseover="this.style.backgroundColor='#e56600'" onmouseout="this.style.backgroundColor='#FC7700'">
                            Voir Plus
                        </button>
                    </div>

                    <!-- Transaction items -->
                    <div class="space-y-4">
                        <!-- Fatou -->
                        <div class="flex items-center justify-between p-4 rounded-lg" style="background-color: #1a1a1a;">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #8B5CF6;">
                                    <span class="text-white text-xs font-bold">g...</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: #FC7700;">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Fatou</div>
                                        <div class="text-gray-400 text-sm">Retrait</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-semibold">778674311</div>
                                <div class="text-gray-400 text-sm">25-01-07</div>
                            </div>
                        </div>

                        <!-- Astou -->
                        <div class="flex items-center justify-between p-4 rounded-lg" style="background-color: #1a1a1a;">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #8B5CF6;">
                                    <span class="text-white text-xs font-bold">A...</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: #FC7700;">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Astou</div>
                                        <div class="text-gray-400 text-sm">Depot</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-semibold">778674311</div>
                                <div class="text-gray-400 text-sm">25-01-07</div>
                            </div>
                        </div>

                        <!-- Nina -->
                        <div class="flex items-center justify-between p-4 rounded-lg" style="background-color: #1a1a1a;">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #6B7280;">
                                    <span class="text-white text-xs font-bold">N</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: #FC7700;">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v2"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Nina</div>
                                        <div class="text-gray-400 text-sm">Payement</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-semibold">778674311</div>
                                <div class="text-gray-400 text-sm">25-01-07</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>