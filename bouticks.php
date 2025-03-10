<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdjns faw -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>tickts - La Bouticks</title>
    <link rel="stylesheet" href="tickets.css" />
    <link rel="stylesheet" href="boutick.css" />
</head>
<body>

    <!-- nav  -->

    <h1 class="lanav" style="text-align: center; padding: 10px;">
        /* include la navbar ici ... */
    </h1>



    <div class="body">
        <div class="containp">
            <h1 class="timg">Home /
                <a href="bouticks.html" class="linkdoc"> Bouticks</a>
             </h1>
        </div>
    </div>

    <!-- rechercher vite -->

    <div class="fasta">
        <h2 class="chap">Recherchez rapidement </h2>
    </div>

    <div class="fasty">
        <select name="genre_tick" id="kinds">
            <option value="1">Par catégories</option>
            <option value="2">Concerts & Festivals</option>
            <option value="3">Sports & Compétitions</option>
            <option value="4">Spectacles & Théâtre</option>
            <option value="5">Conférences & Formations</option>
            <option value="6">Événements religieux</option>
            <option value="7">Soirées privées/publiques</option>
            <option value="8">Foires & Expositions</option>
            <option value="9">Tourisme & Loisirs</option>
        </select>
        <select name="timer_date" id="timerdate">
            <option value="1">Par date</option>
            <option value="1">Aujourd’hui</option>
            <option value="2">Demain</option>
            <option value="3">Les 7 prochains jours</option>
            <option value="4">Dans 1 mois</option>
            <option value="5">Choisir une date</option>
        </select>
        <select name="places_tick" id="places">
            <option value="1">Par lieu/ville</option>
            <option value="2">Abidjan</option>
            <option value="3">Bouaké</option>
            <option value="4">Yamoussoukro</option>
            <option value="5">San-Pédro</option>
            <option value="6">Autres villes</option>
        </select>
        <select name="price_tick" id="byprice">
            <option value="1">Par prix</option>
            <option value="2">Gratuit</option>
            <option value="3">1 000 - 5 000 FCFA</option>
            <option value="4">5 000 - 10 000 FCFA</option>
            <option value="5">10 000 - 50 000 FCFA</option>
            <option value="6">Plus de 50 000 FCFA</option>
        </select>
        <select name="kind_tick" id="kindticks">
            <option class="ftg" value="1">Par type de ticket</option>
            <option value="2">Grand Public</option>
            <option value="3">Invitation spéciale</option>
            <option value="4">VIP</option>
            <option value="5">VVIP</option>
        </select>
        <input type="button" value="Trouver" class="finder"  />
        
    </div>

    <br /><br /><br />

    <p class="timetoday"> Abidjan le 07/03/2025 - 18:20:45</p>

    <br /><br />

    <div class="cherching">
        <p class="resuls">Résultat de votre recherche : </p>
        <p class="found"> 4 articles trouvés </p>
        <p class="voir">Montrer : 
            <select name="voirplus" id="se">
                <option class="nbtick" value="1">1</option>
                <option class="nbtick" value="2">5</option>
                <option class="nbtick" value="3">9</option>
                <option class="nbtick" value="4">15</option>
            </select>
        </p>
    </div>
    <br />
    <br />

    <div class="ticketcontain">
        <div class="ticket">
            <img class="gtick" src="images/concert.jpg" alt="concr" />
            <div class="tcontent">
                <div class="typetick">
                    <p class="nameart">DAVID THE GOLFER</p>
                    <p class="prixpass"> 10,000 FCFA</p>
                </div>
                <p class="datevent">18 Fevrier 2025 </p>
                <p class="typevent">CONCERT - Jazzy NIGHT</p>
                <p class="locate"><i class="fa-solid fa-location-dot" id="ilocate1"></i>
                    Abidjan, Treichville, Palais de la Culture</p>
                <div class="shoplocateart">
                    <p class="statusart"> &bull; Ticket verifié <i class="fa-solid fa-check" id="ok3"></i> </p>
                    <button class="pass">Grand Public</button>
                </div>
            </div>
            <a href="detailstick.html" class="apercu"> 
                <button class="add-to-cart">Aperçu &nbsp; <i class="fa-regular fa-bookmark" id="icarti3"></i></button>
            </a>
            </div>
        <div class="ticket">
            <img class="gtick" src="images/concert.jpg" alt="concr" />
            <div class="tcontent">
                <div class="typetick">
                    <p class="nameart">DAVID THE GOLFER</p>
                    <p class="prixpass"> 10,000 FCFA</p>
                </div>
                <p class="datevent">18 Fevrier 2025 </p>
                <p class="typevent">CONCERT - Jazzy NIGHT</p>
                <p class="locate"><i class="fa-solid fa-location-dot" id="ilocate1"></i>
                    Abidjan, Treichville, Palais de la Culture</p>
                <div class="shoplocateart">
                    <p class="statusart"> &bull; Ticket verifié <i class="fa-solid fa-check" id="ok4"></i> </p>
                    <button class="pass">Grand Public</button>
                </div>
            </div>
            <a href="detailstick.html" class="apercu"> 
                <button class="add-to-cart">Aperçu &nbsp; <i class="fa-regular fa-bookmark" id="icarti4"></i></button>
            </a>        
        </div>
    </div>

    <br />
    <br />
    <br />
    <br />

        <!-- footer -->
            <h1 class="foot" style="text-align: center; padding: 10px;font-size: 20px;">
                /* include le footer ici ... */
            </h1>
</body>
</html>