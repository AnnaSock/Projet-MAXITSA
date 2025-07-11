<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte créé avec succès</title>
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
    <div class="text-center max-w-md mx-auto">
        <!-- Success message -->
        <h1 class="text-3xl font-semibold mb-8 leading-relaxed">
            Compte créer avec succès !!!!
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl mb-12 text-gray-300">
            Cliquer pour accéder à ton compte
        </p>
        
        <!-- Access button -->
        <button class="text-white font-medium py-4 px-8 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 text-lg" style="background-color: #FC7700; --tw-ring-color: #FC7700; --tw-ring-offset-color: #120E0E;" onmouseover="this.style.backgroundColor='#e56600'" onmouseout="this.style.backgroundColor='#FC7700'">
            <a href="/dashboard">acceder a mon compte</a>
        </button>
    </div>
</body>
</html>


