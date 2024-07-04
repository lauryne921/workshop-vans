<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue</title>
  <style>
    body {
      overflow: hidden;
      display: flex;
      width: 100%;
      height: 100vh;
      margin: 0;
    }
    .left-bg {
      background-image: url('/images/left-bg.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }
    .right-bg {
      background-image: url('/images/right-bg.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      border-left: 4px solid #3b82f6;
    }
    .button {
      background-color: white;
      color: black;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-decoration: none;
      text-align: center;
    }
  </style>
</head>
<body>
  <div style="display: grid; grid-template-columns: repeat(2, 1fr); width: 100%; height: 100vh;">
    <div class="left-bg">
      <button class="button">Télécharger notre brochure d'évènements</button>
    </div>
    <div class="right-bg">
      <a href="/register" class="button">S'inscrire à notre prochain évènement</a>
    </div>
  </div>
  @include('widget')
</body>
</html>