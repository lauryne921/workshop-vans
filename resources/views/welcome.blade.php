<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue</title>
  @vite('resources/css/app.css')
  <style>
    .left-bg {
      background-image: url('/images/left-bg.jpg'); /* Remplacez par le chemin de votre image */
      background-size: cover;
      background-position: center;
      filter: brightness(0.5);
    }
    .right-bg {
      background-image: url('/images/right-bg.jpg'); /* Remplacez par le chemin de votre image */
      background-size: cover;
      background-position: center;
      filter: brightness(0.5);
    }
  </style>
</head>
<body class="overflow-hidden flex">
    <div style="display:grid; grid-template-columns:repeat(2,1fr); width:100%; height:100vh;">
        <div class="w-1/2 h-full left-bg flex items-center justify-center">
            <button class="bg-white text-black py-2 px-4 rounded-lg shadow-lg">
            Télécharger notre brochure d'évènements
            </button>
        </div>
        <div class="w-1/2 h-full right-bg flex items-center justify-center border-l-4 border-blue-500">
            <a href="/register" class="bg-white text-black py-2 px-4 rounded-lg shadow-lg">
            S'inscrire à notre prochain évènement
            </a>
        </div>
    </div>
</body>
</html>
