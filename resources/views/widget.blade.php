<div id="widget" style="position: fixed; bottom: 20px; right: 20px; background-image: url('/images/img_widget2.jpg'); background-size: cover; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.3); width: 350px; height: 275px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <div style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;"></div>
    <button id="close-widget" style="position: absolute; top: 10px; right: 10px; background-color: transparent; border: none; font-size: 30px; cursor: pointer; color: #fff;">&times;</button>
    <p style="font-size: 16px; text-align: center; color: white; z-index: 1;">Soyez au cœur de l'action : Réservez vos places pour voir des skateurs pros aux Jeux Olympiques de Paris 2024 !</p>
    <button id="redirect-button" style="background-color: black; color: #fff; border: none; padding: 10px 22px; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 20px; z-index: 1;">
        Visiter la billeterie
    </button>
</div>

<script>
    document.getElementById('close-widget').addEventListener('click', function() {
        document.getElementById('widget').style.display = 'none';
    });

    document.getElementById('redirect-button').addEventListener('click', function() {
        window.location.href = 'https://tickets.paris2024.org/event/parc-urbain-la-concorde-la-concorde-18211473/?affiliate=24R';
    });
</script>