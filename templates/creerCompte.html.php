<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
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
<body class="text-white min-h-screen flex items-center justify-center p-4" style="background-color: #120E0E;">
    <div class="w-full max-w-2xl relative">
        <!-- Orange decorative arc -->
        <div class="absolute top-0 right-0 w-32 h-32 opacity-30">
            <svg viewBox="0 0 100 100" class="w-full h-full">
                <path d="M 50 10 A 40 40 0 0 1 90 50" stroke="#FC7700" stroke-width="2" fill="none"/>
                <path d="M 50 15 A 35 35 0 0 1 85 50" stroke="#FC7700" stroke-width="1.5" fill="none"/>
                <path d="M 50 20 A 30 30 0 0 1 80 50" stroke="#FC7700" stroke-width="1" fill="none"/>
            </svg>
        </div>

        <!-- Main content -->
        <div class="rounded-lg p-8 shadow-2xl" style="background-color: #1a1a1a;">
            <!-- Header -->
            <div class="flex items-center mb-6">
                <svg class="w-6 h-6 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
                <h1 class="text-2xl font-semibold">Créer un compte</h1>
            </div>
            
            <p class="mb-8 text-lg" style="color: #FC7700;">Saisissez les informations suivantes</p>

            <!-- Form -->
            <form action="/accesCompte" class="space-y-6">
                <!-- First row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Nom :</label>
                        <input type="text" placeholder="Entrer votre nom" class="w-full px-4 py-3 bg-white text-gray-900 rounded-full placeholder-gray-500 focus:outline-none focus:ring-2" style="--tw-ring-color: #FC7700;">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Carte d'identité Nationale :</label>
                        <input type="text" placeholder="Entrer votre numéro de carte CNI" class="w-full px-4 py-3 bg-white text-gray-900 rounded-full placeholder-gray-500 focus:outline-none focus:ring-2" style="--tw-ring-color: #FC7700;">
                    </div>
                </div>

                <!-- Second row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Prénom :</label>
                        <input type="text" placeholder="Entrer votre prénom" class="w-full px-4 py-3 bg-white text-gray-900 rounded-full placeholder-gray-500 focus:outline-none focus:ring-2" style="--tw-ring-color: #FC7700;">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Numéro de téléphone :</label>
                        <input type="tel" placeholder="Entrer votre numéro de téléphone" class="w-full px-4 py-3 bg-white text-gray-900 rounded-full placeholder-gray-500 focus:outline-none focus:ring-2" style="--tw-ring-color: #FC7700;">
                    </div>
                </div>

                <!-- Third row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-white text-sm font-medium mb-2">Mot de passe :</label>
                        <input type="password" placeholder="Entrer votre mot de passe" class="w-full px-4 py-3 bg-white text-gray-900 rounded-full placeholder-gray-500 focus:outline-none focus:ring-2" style="--tw-ring-color: #FC7700;">
                    </div>
                    <div>
                        <!-- Empty div for grid alignment -->
                    </div>
                </div>

                <!-- Photo CNI section -->
                <div>
                    <label class="block text-white text-sm font-medium mb-4">Photo CNI :</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- RECTO -->
                        <div class="border-2 border-gray-600 rounded-lg p-8 text-center hover:bg-gray-600 transition-colors cursor-pointer" style="background-color: #2a2a2a;">
                            <div class="mb-4">
                                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3" style="background-color: #FC7700;">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-white font-medium">RECTO</p>
                        </div>

                        <!-- VERSO -->
                        <div class="border-2 border-gray-600 rounded-lg p-8 text-center hover:bg-gray-600 transition-colors cursor-pointer" style="background-color: #2a2a2a;">
                            <div class="mb-4">
                                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3" style="background-color: #FC7700;">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-white font-medium">VERSO</p>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="flex justify-end">
                    <button type="submit" class="text-white font-bold py-3 px-8 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #FC7700; --tw-ring-color: #FC7700; --tw-ring-offset-color: #120E0E;" onmouseover="this.style.backgroundColor='#e56600'" onmouseout="this.style.backgroundColor='#FC7700'">
                        VALIDER
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add click functionality to upload areas
        document.querySelectorAll('.cursor-pointer').forEach(uploadArea => {
            uploadArea.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        // Here you would typically handle the file upload
                        console.log('File selected:', file.name);
                        // You could update the UI to show the selected file
                    }
                };
                input.click();
            });
        });
    </script>
</body>
</html>