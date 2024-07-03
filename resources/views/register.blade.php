<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
  <main class="bg-white h-4/5 p-8 rounded-lg shadow-md flex flex-col md:flex-row w-full max-w-4xl">
    <div class="w-full md:w-1/2 flex items-center justify-center mb-4 md:mb-0">
      <img class="affiche w-80 h-auto rounded" src="{{ asset('images/affiche_dalle.webp') }}" alt="Affiche de l'évènement">
    </div>
    <div class="w-full md:w-1/2">
      <div class="text-center mb-6">
        <h1 class="text-4xl font-bold text-gray-800">Inscrivez-vous à l'évènement</h1>
      </div>

      <p class="text-sm text-gray-600 mb-4 text-center">Inscrivez-vous à notre évènement et tentez votre chance d'être tiré au sort pour repartir avec une de nos 200 paires exclusives à ces Jeux Olympiques 2024 de Paris.</p>
      <p class="text-sm text-gray-600 mb-6 text-center">Vous recevrez un mail dans quelques jours pour connaître la réponse.</p>

      @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">
          {{ session('success') }}
        </div>
      @endif

      @if($errors->any())
        <div class="bg-red-100 text-red-800 p-4 mb-4 rounded">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
          <label class="block text-gray-700">Prénom :</label>
          <input type="text" name="firstname" value="{{ old('firstname') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Nom :</label>
          <input type="text" name="lastname" value="{{ old('lastname') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Email :</label>
          <input type="email" name="email" value="{{ old('email') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="bg-black text-white py-2 px-4 mt-2 rounded w-full hover:bg-blue-700 transition duration-300">S'inscrire</button>
      </form>
    </div>
    @include('widget')
  </main>
  @vite('resources/js/app.js')
</body>
</html>
