
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdjns faw -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>tickts - Détails</title>
    <link rel="stylesheet" href="tickets.css" />
    <link rel="stylesheet" href="details.css" />
    <!-- For maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
    <h1 class="nav" style="text-align: center;font-size: 20px;padding: 10px;">
        /* navbar ici ... */
    </h1>

    <div class="body">
        <div class="containp">
            <h1 class="timg">Home /
                <a href="detailstick.html" class="details">Details</a>
            </h1>
        </div>
    </div>

    <!-- plus de details -->

    <div class="more">
        <h2 class="moredt">Plus de détails </h2>
    </div>

    <br />
    <br />

    <div class="deticks">
        <div class="imgdet">
            <img src="images/didib.jpg" class="detimg" alt="didi2">
        </div>
        <div class="detinfo">
            <h4 class="artist">L'Artiste</h4>
            <p class="evendet">DIDI B</p>
            <h4 class="artist">Catégorie d'événement</h4>
            <p class="evendet">Concert - Rap Ivoire</p>
            <h4 class="artist">Date & Lieu</h4>
            <p class="evendet"> <i class="fa-solid fa-location-dot" id="lieu"></i> &nbsp; 15/09/2022 - Palais de la Culture, Abj</p>
            <h4 class="artist"> Prix & Pass</h4>
            <div class="pripass">
                <h4 class="pri">25, 000 FCFA </h4>
                <span class="passa">VIP</span>
            </div>
            <br />
            <div class="desod">
                <!-- icones de phone et mail -->
                 <i class="fa-solid fa-phone" id="tcall"></i> <span class="teli">225 0788729838</span>
                 <a href="mailto:concerticks12@net.ci" class="mailto"><i class="fa-solid fa-envelope" id="eml"></i>
                    concerticks12@net.ci
                </a>
            </div>
            <br />
            <br />
            <div class="medias">
                <a href="#"><i class="fab fa-facebook-f" id="fb"></i></a>
                <a href="#"><i class="fab fa-twitter" id="tw"></i></a>
                <a href="#"><i class="fab fa-instagram" id="insta"></i></a>
            </div>
        </div>
    </div>

    <br />
    <br />

    <h3 class="lieuvent">
        Adresse de l'événement : 15/09/2022 - Abj, Treichville, Palais de la Culture, Abidjan.
    </h3>

    <div class="mapap">
        <div id="map" class="adressevent" style="height: 400px;">
        </div>
        <div class="lepromo">
            <h3 class="promoname"> Sponseur/Promoteur de l'évenement </h3>
            <img src="images/Logotype_Betclic.svg.png" class="lapromo" alt="promo" />
            <p class="txtpromo"> David Richard, DG de Betclic</p>
            <div class="contpromo">
                <i class="fa-solid fa-phone" id="tcall"> &nbsp;225 0788729838</i>
                <a href="mailto:davidrichard@betriclic.ci" class="mailpromo"><i class="fa-solid fa-envelope" id="eml"></i>
                    davidrichard@betriclic.ci
                </a>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

    <footer id="footdet">
        <h1 class="fdet" style="text-align: center; padding: 10px;font-size: 20px;color: #000;">
            /* footer ici... */
        </h1>
    </footer>
    
    <script>
        // Initialisation de la carte
        var map = L.map('map').setView([5.345317, -4.024429], 10); // Coordonnées approximatives d'Abidjan
    
        // Ajouter le fond de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    
        // Ajouter un marqueur pour l'adresse de l'événement
        var marker = L.marker([5.345317, -4.024429]).addTo(map)
            .bindPopup("<b>Lieu de l'événement</b><br>Abidjan, Côte d'Ivoire")
            .openPopup();
    </script>
    

</body>
</html>