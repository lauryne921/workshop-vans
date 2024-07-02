<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-blue-500 min-h-screen flex items-center justify-center">
  <main class="bg-white p-8 rounded shadow-md flex flex-col md:flex-row w-full max-w-4xl">
    <div class="w-full md:w-1/2 flex items-center justify-center mb-4 md:mb-0">
      <img class="affiche mx-auto" src="{{ asset('images/affiche_dalle.webp') }}" alt="Example Image">
    </div>
    <div class="w-full md:w-1/2">
      <div class="text-center mb-6">
        <h1 class="text-2xl font-bold">Inscrivez-vous à l'évènement</h1>
      </div>

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
          <input type="text" name="firstname" value="{{ old('firstname') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Nom :</label>
          <input type="text" name="lastname" value="{{ old('lastname') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Email :</label>
          <input type="email" name="email" value="{{ old('email') }}" required class="bg-gray-100 border border-gray-300 rounded w-full p-2 mt-1">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">S'inscrire</button>
      </form>
    </div>
  </main>
  @vite('resources/js/app.js')
</body>
</html>
