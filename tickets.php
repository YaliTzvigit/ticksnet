<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdjns faw -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>tickts - Accueil</title>
    <link rel="stylesheet" href="tickets.css" />
</head>
<body>

    <!-- nav  -->

    <nav class="header">
        <div class="thelogo">
            <img src="images/lelogo.png" class="irvt" alt="thelog" />
        </div>
        <a href="" class="create">
            <button class="eventcreate">Créer un evenement &plus; </button>
        </a>
        <div class="gaps">
            <a href="lepaniertick.html" class="myselect">
                <i class="fa-solid fa-shopping-basket" id="icart">
                    <sup id="sup">0</sup>
                </i>
            </a>
            <a href="/form" class="formsl">
                <i class="fa-solid fa-user-plus" id="iutili"></i>
            </a>
            <a href="javascript:void(0)" class="lang">
                <i class="fa-solid fa-phone" id="itel"></i>
                &nbsp;
                <span class="callme"> 07 88 72 9838</span>
            </a>
        </div>
    </nav>

    <!-- body -->

    <div class="body">
        <div class="containp">
            <h1 class="timg">Le premier revendeur de tickets en Côte d'Ivoire. First.</h1>
            <h2 class="ptimg"> Trouve ton ticket chap!</h2>
        </div>
        <div class="finding">
            <input type="text" name="namefind" placeholder="Rechercher un événement, un artiste ..." id="find" />
            <button type="submit" class="trouver">Trouver</button>
        </div>
    </div>
    <!-- en vogue & actualités -->
     <br ><br />

    <h2 class="voguart"> Artistes en vogue </h2>
    <p class="pvoguart"> les actualités sur vos artistes &darr;</p>
    <br />
    <div class="linkvog">
        <a href="" class="artistevg"> didi b</a>
        <a href="" class="artistevg"> himra</a>
        <a href="" class="artistevg"> josey</a>
        <a href="" class="artistevg"> suspect 95</a>
        <a href="" class="artistevg"> Ks Bloom</a>
        <a href="" class="artistevg"> Safarel Obiang</a>
    </div>

    <br />
    <br />
    <br />
    <br />

    <!-- catégories -->

    <h2 class="ctickets"> Tu cherches quoi ? </h2>
    <p class="ptickets"> Voir ici &nbsp; &downarrow; </p>

    <br />
    <br />
    <br />

    <!-- categories de tickets -->

    <section class="tickstypes">
        <div class="types">
            <button class="catick">Musique</button>
            <div class="dropas">
                <a href="" class="drop">Showcase</a>
                <a href="" class="drop">Concerts</a>
                <a href="" class="drop">Release Party</a>
            </div>
        </div>
        
        <div class="types">
            <button class="catick">Panel</button>
            <div class="dropas">
                <a href="" class="drop">Entrepreneuriat</a>
                <a href="" class="drop">Salons professionnels</a>
            </div>
        </div>
        <div class="types">
            <button class="catick">Comédie</button>
            <div class="dropas">
                <a href="" class="drop">Stand-up </a>
                <a href="" class="drop">One Man Show </a>
                <a href="" class="drop">Comédies musicales</a>
            </div>
        </div>

        <div class="types">
            <button class="catick">Soirées</button>
            <div class="dropas">
                <a href="" class="drop">Paiyas </a>
                <a href="" class="drop">Galas & soirées d'entreprises</a>
                <a href="" class="drop">Soirées à thème (White Party ...)</a>
            </div>
        </div>

    </section>

    <br />
    <br />
    <br />
    <br />

    <div class="hrsaut">
        <hr noshade="" class="hrliner"/>
    </div>

    <br />
    <br />

    <!-- nouveaus tickets -->

    <h2 class="lesnew">
        Evénement à venir !
    </h2>

    <br />

    <div class="ticketcontain">
        <div class="ticket">
            <img src="images/sound.jpg" alt="didi2" />
            <div class="tcontent">
                <div class="typetick">
                    <p class="nameart">Jane Jennifer</p>
                    <p class="prixpass"> 10,000 FCFA</p>
                </div>
                <p class="datevent">18 Fevrier 2025 </p>
                <p class="typevent">CONCERT - Jazzy NIGHT</p>
                <p class="locate"><i class="fa-solid fa-location-dot" id="ilocate1"></i>
                    Abidjan, Treichville, Palais de la Culture</p>
                <div class="shoplocateart">
                    <p class="statusart"> &bull; Ticket verifié <i class="fa-solid fa-check" id="ok"></i> </p>
                    <button class="pass">Grand Public</button>
                </div>
            </div>
            <a href="" class="apercu"> 
                <button class="add-to-cart">Aperçu &nbsp; <i class="fa-regular fa-bookmark" id="icarti1"></i></button>
            </a>        </div>
        <div class="ticket">
            <img src="images/didib.jpg" alt="didi" />
            <div class="tcontent">
                <div class="typetick">
                    <p class="nameart">DIDI B</p>
                    <p class="prixpass"> 25,000 FCFA</p>
                </div>
                <p class="datevent">18 Fevrier 2025 </p>
                <p class="typevent">CONCERT - Jazzy NIGHT</p>
                <p class="locate"><i class="fa-solid fa-location-dot" id="ilocate1"></i>
                    Abidjan, Treichville, Palais de la Culture</p>
                <div class="shoplocateart">
                    <p class="statusart"> &bull; Ticket verifié <i class="fa-solid fa-check" id="ok2"></i> </p>
                    <button class="pass">VIP</button>
                </div>
            </div>
            <a href="" class="apercu"> 
                <button class="add-to-cart">Aperçu &nbsp; <i class="fa-regular fa-bookmark" id="icarti2"></i></button>
            </a>
        </div>
    </div>

    <!-- revnedre son ticket -->

    <br />
    <br />
    <br />
    <br />

    <div class="sellticks">
        <div class="selling">
            <h2 class="sell">Revendre mon ticket <sup>+</sup></h2>
            <p class="sellit"> Ton ticket te game plus ? revends le chap &nbsp; &raquo;&raquo;&raquo; </p>
            <p class="how">Comment ça marche  
                <a href="" class="howto">
                    <i class="fa-solid fa-circle-question" id="ihow"></i>
                </a>
            </p>
            <div class="overlay" id="overlay">
                <div class="modal">
                    <span class="close-btn" id="close-btn">&times;</span>
                    <h2 class="demarche">à savoir</h2>
                    <br />
                    <p class="explicate">Clique juste sur le bouton 'Vendre mon ticket'</p>
                    <p class="explicate">Ensuite, tu verras un formulaire. Suis les instructions et remplis le formulaire et valide le.</p>
                    <p class="noteb">NB : Votre ticket sera d'abord vérifié par notre équipe avant d'être publié sur la page, 
                        sous réserve du respect des formalités requises et des politiques du site.
                    </p>
                </div>
            </div>
        </div>
        <a href="" class="valink"> 
            <button class="sellbtn">Vendre mon ticket</button>
        </a>
    </div>

    <!-- M'inscrire pour ne rien rater -->

    <div class="labox">
        <div class="infosb">
            <h2 class="infop">Pour être branché sur tout les wés, </h2>
            <p class="suscribe">Inscris toi ici, pour ne rien rater &raquo;&raquo;&raquo;</p>
        </div>
        <div class="formi">
            <input type="text" name="email" placeholder="monmail123xyz@gmail.com" id="email" />
            <button type="submit" class="inscrire">M'inscrire</button>
        </div>
    </div>

    <!-- footer -->

    <footer id="footing">
        <!-- col 1 -->
        <div class="fcol">
            <div class="partf">
                <h4 class="tpart">REVENDSTICKS</h4>
                <p class="def">Nous sommes une plateforme qui 
                    revend des tickets en ligne.</p>
            </div>
            <div class="wellinks">
                <h5 class="twlink">Liens rapides</h5>
                <a href="bouticks.html" class="links">La bouticks</a>
                <a href="/formulairetick" class="links">Revendre son ticket</a>
                <a href="" class="links">Tout savoir</a>
            </div>
            <div class="wellinks">
                <h5 class="twlink">Politiques & Paiement</h5>
                <a href="" class="links">Confidentialité</a>
                <a href="" class="links">Achat et revente des tickets</a>
                <a href="" class="links">Paiement</a>
            </div>
        </div>
        <br />
        <br />

        <!-- col 2 -->

        <div class="scol">
            <p class="cpr">
                &copy; Revendsticks - 2025
            </p>
            <a href="https://www.revendstoutci.net" class="thesite">
                revendstoutci.net
            </a>
            <div class="netsocial">
                <a href="https://www.facebook.com/" class="if">
                    <i class="fab fa-facebook-f" id="ifab"></i>
                </a>
                 <a href="https://www.instagram.com/" class="if">
                    <i class="fab fa-instagram" id="ig"></i>
                </a>
                 <a href="https://www.tiktok.com/" class="if">
                    <i class="fab fa-tiktok" id="itok"></i>
                </a>
                
                <a href="https://wa.me/2250788729838" class="if">
                    <i class="fab fa-whatsapp" id="iwha"></i>
                </a>
            </div>
        </div>
    </footer>
    
    <!-- script -->

    <script>

        /* scroll de la nav */
        
        let lastScrollTop = 0;
        const navbar = document.querySelector(".header");

        window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY;

        if (scrollTop > lastScrollTop) {
        // Scroll vers le bas → cacher la navbar
        navbar.style.transform = "translateY(-100%)";
        navbar.style.transition = "transform 0.3s ease-in-out";
        } else {
        // Scroll vers le haut → afficher la navbar
        navbar.style.transform = "translateY(0)";
        }
    
        lastScrollTop = scrollTop;
});

    /* open modal  */

     /* open modal */

 document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("overlay");
    const openModal = document.getElementById("ihow"); // L'icône qui ouvre le modal
    const closeModal = document.getElementById("close-btn");

    // Ouvrir le modal
    openModal.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche le lien d'agir comme un lien classique
        modal.style.display = "flex";
    });

    // Fermer le modal en cliquant sur le bouton "X"
    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Fermer en cliquant en dehors du modal
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


    </script>
    
</body>
</html>