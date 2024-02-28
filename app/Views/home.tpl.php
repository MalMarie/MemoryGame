<h2>Le Jeu</h2>

<div class="container">
    <div id="main-menu">
        <p>Choisissez votre niveau de difficulté</p>
        <div id="difficulty">
            <div class="stars">
                <button class="level">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                </button>
            </div>
            <div class="stars">
                <button class="level">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                </button>
            </div>
            <div class="stars">
                <button class="level">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_white.png" alt="étoile" class="star">
                    <img src="<?= $absoluteUrl ?>/assets/images/star_yellow.png" alt="étoile" class="star">
                </button>
            </div>
        </div>

        <button id="launch-game">Lancer le jeu</button>
    </div>
    <div id="main-scores">
        <table>
            <caption>
                TOP 10
            </caption>
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Iron Man</th>
                    <th>37 pts</th>
                </tr>
                <tr>
                    <th>Tony Stark</th>
                    <th>36 pts </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>