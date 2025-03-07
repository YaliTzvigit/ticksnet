<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdjns faw -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>tickts - Le Panier</title>
    <link rel="stylesheet" href="tickets.css" />
    <link rel="stylesheet" href="lepaniertick.css" />
</head>
<body>

    <!-- nav  -->

    <h1 class="present" style="text-align: center;font-size: 20px; padding: 10px;">
        /* include la navbar ici ... */
    </h1>



    <div class="body">
        <div class="containp">
            <h1 class="timg">Home / 
                <a href="lepaniertick.html" class="linkdoc"> Mon panier</a>
             </h1>
        </div>
    </div>

    <div class="selections">
        <h2 class="tselect">Mes sélections</h2>
    </div>

    <!-- choix -->

    <br />
    <br />

    <div class="maincnt">
        <div class="itickct">
        <div class="itick">
            <img class="igtick" src="images/didi2.jpg" alt="didi" />
            <div class="quantick">
                <button class="moins">-</button>
                <span id="nombret">1</span>
                <button class="addi">+</button>
            </div>
            <p id="prixi">10,000 FCFA</p>
        </div>

        <!-- infos event -->

        <div class="eventips">
            <div class="remove">
                <h4 class="tieve">Sponsorisé par </h4>
                <button type="button" class="bremove">&times;</button>
            </div>
            <img class="betig" src="images/Logotype_Betclic.svg.png" alt="bet" />
            <h4 class="tieve">L'événement </h4>
            <p class="texteve">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed sit. Et je pense que je suis un mec à part. Les filles me courent après juste à cause de
                ma simplicité. Elles aiment ça, mêmes mes frères sang me trouvent incompréhensible.
            </p>
            <p class="texteve">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed sit. Et je pense que je suis un mec à part. Les filles me courent après juste à cause de
                ma simplicité. Elles aiment ça, mêmes mes frères sang me trouvent incompréhensible.
            </p>
        </div>
        </div>
    </div>

    <hr class="sepa" noshade />

    <div class="sumpay">
        <h2 class="tsum">Total : </h2>
        <p id="prixapy">10, 000 FCFA</p>
    </div>
    <div class="cash">
    <a href="transac.html" class="finalbpay"><button class="bsumpay">
        Payer maintenant
    </button> </a>
    </div>

    <br />
    <br />
    <br />
    <br />
    <h1 class="pfoot" style="text-align: center;font-size: 20px; padding: 10px;">
        /* include le footer ici ... */
    </h1>
</body>
</html>