<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      font-family: 'Montserrat', sans-serif;
    }

    main {
      background-color: white;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      width: 100%;
      max-width: 64rem;
      height: 80vh;
    }

    @media (min-width: 768px) {
      main {
        flex-direction: row;
      }
    }

    .affiche {
      width: 24rem;
      height: auto;
      border-radius: 0.5rem;
    }

    .text-center {
      text-align: center;
    }

    .text-4xl {
      font-size: 2.25rem;
      line-height: 2.5rem;
    }

    .font-bold {
      font-weight: 700;
    }

    .text-gray-800 {
      color: #2d3748;
    }

    .text-gray-600 {
      color: #718096;
    }

    .text-xs {
      font-size: 0.75rem;
      line-height: 1rem;
    }

    .bg-gray-100 {
      background-color: #f7fafc;
    }

    .border {
      border-width: 1px;
    }

    .border-gray-300 {
      border-color: #e2e8f0;
    }

    .rounded {
      border-radius: 0.375rem;
    }

    .w-full {
      width: 100%;
    }

    .p-2 {
      padding: 0.5rem;
    }

    .mt-1 {
      margin-top: 0.25rem;
    }

    .focus\:outline-none:focus {
      outline: none;
    }

    .focus\:ring-2:focus {
      box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.6);
    }

    .bg-green-100 {
      background-color: #f0fff4;
    }

    .text-green-800 {
      color: #2f855a;
    }

    .p-4 {
      padding: 1rem;
    }

    .mb-4 {
      margin-bottom: 1rem;
    }

    .bg-red-100 {
      background-color: #fff5f5;
    }

    .text-red-800 {
      color: #c53030;
    }

    .mb-6 {
      margin-bottom: 1.5rem;
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .mt-2 {
      margin-top: 0.5rem;
    }

    .hover\:bg-blue-700:hover {
      background-color: #2b6cb0;
    }

    .transition {
      transition: background-color 0.3s ease;
    }

    .form-checkbox {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: white;
      border: 1px solid #e2e8f0;
      border-radius: 0.25rem;
      cursor: pointer;
      display: inline-block;
      height: 1rem;
      margin-right: 0.5rem;
      position: relative;
      width: 1rem;
    }

    .form-checkbox:checked {
      background-color: #3182ce;
      border-color: #3182ce;
    }

    .inline-flex {
      display: inline-flex;
    }

    .items-center {
      align-items: center;
    }

    .ml-2 {
      margin-left: 0.5rem;
    }

    .form-checkbox {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: white;
      border: 1px solid #e2e8f0;
      border-radius: 0.25rem;
      cursor: pointer;
      display: inline-block;
      height: 1rem;
      margin-right: 0.5rem;
      position: relative;
      width: 1rem;
    }

    .form-checkbox:checked {
      background-color: #3182ce;
      border-color: #3182ce;
    }
  </style>
</head>
<body>
  <main>
    <div style="width: 100%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
      <img class="affiche" src="{{ asset('images/affiche_jo.jpg') }}" alt="Affiche de l'évènement">
    </div>
    <div style="width: 100%;">
      <div style="text-align: center; margin-bottom: 1.5rem;">
        <h1 style="font-size: 2.25rem; line-height: 2.5rem; font-weight: 700; color: #2d3748;">Inscrivez-vous à l'évènement</h1>
      </div>

      <p style="font-size: 0.75rem; line-height: 1rem; color: #718096; margin-bottom: 1rem; text-align: center;">Inscrivez-vous à notre évènement et tentez votre chance d'être tiré au sort pour repartir avec une de nos 200 paires exclusives à ces Jeux Olympiques 2024 de Paris.</p>
      <p style="font-size: 0.75rem; line-height: 1rem; color: #718096; margin-bottom: 1.5rem; text-align: center;">Vous recevrez un mail dans quelques jours pour connaître la réponse.</p>

      @if(session('success'))
        <div style="background-color: #f0fff4; color: #2f855a; padding: 1rem; margin-bottom: 1rem; border-radius: 0.375rem;">
          {{ session('success') }}
        </div>
      @endif

      @if($errors->any())
        <div style="background-color: #fff5f5; color: #c53030; padding: 1rem; margin-bottom: 1rem; border-radius: 0.375rem;">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div style="margin-bottom: 1rem;">
          <label style="display: block; color: #2d3748;">Prénom :</label>
          <input type="text" name="firstname" value="{{ old('firstname') }}" required style="background-color: #f7fafc; border: 1px solid #e2e8f0; border-radius: 0.375rem; width: 100%; padding: 0.5rem; margin-top: 0.25rem; outline: none;">
        </div>
        <div style="margin-bottom: 1rem;">
          <label style="display: block; color: #2d3748;">Nom :</label>
          <input type="text" name="lastname" value="{{ old('lastname') }}" required style="background-color: #f7fafc; border: 1px solid #e2e8f0; border-radius: 0.375rem; width: 100%; padding: 0.5rem; margin-top: 0.25rem; outline: none;">
        </div>
        <div style="margin-bottom: 1rem;">
          <label style="display: block; color: #2d3748;">Email :</label>
          <input type="email" name="email" value="{{ old('email') }}" required style="background-color: #f7fafc; border: 1px solid #e2e8f0; border-radius: 0.375rem; width: 100%; padding: 0.5rem; margin-top: 0.25rem; outline: none;">
        </div>
        <div style="margin-bottom: 1rem;">
          <input type="hidden" name="newsletter" value="0">
          <label style="display: inline-flex; align-items: center;">
            <input type="checkbox" name="newsletter" value="1" style="form-checkbox">
            <span style="margin-left: 0.5rem; color: #2d3748;">Inscription à la newsletter</span>
          </label>
        </div>
        <button type="submit" style="background-color: black; color: white; padding-top: 0.5rem; padding-bottom: 0.5rem; padding-left: 1rem; padding-right: 1rem; margin-top: 0.5rem; border-radius: 0.375rem; width: 100%; transition: background-color 0.3s ease; cursor:pointer;">S'inscrire</button>
      </form>
    </div>
    @include('widget')
  </main>
  <script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
