<!DOCTYPE html>
<html>
<head>
    <title>Mail de confirmation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Merci de vous êtes inscrit, {{ $user->firstname }} {{ $user->lastname }}!</h1>
    <p>Nous avons bien reçu votre inscription pour l'évènement. Nous avons hâte de vous voir !</p>
    <p>Pensez à venir tôt pour avoir plus de chances de remporter une de nos 200 Vans exclusives.</p>
    <br>
    <p>Bien à vous,</p>
    <br>
    <p>Vans</p>
</body>
</html>
