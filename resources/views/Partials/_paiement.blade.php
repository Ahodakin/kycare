<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Paiement</title>
    <!-- Chargement de Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style pour les barres de saisie */
        .form-control-bar {
            border: none;
            border-bottom: 1px solid #ced4da; /* Bordure basse */
            border-radius: 0; /* Pas de bordure arrondie */
            box-shadow: none; /* Pas d'ombre */
            padding: 0; /* Pas de remplissage interne */
        }


        #formContainer {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#formContainer form {
    width: 300px;
    max-width: 100%;
}

#formContainer .nein {
    margin-bottom: 15px;
}

#formContainer label {
    display: block;
    margin-bottom: 5px;
}

#formContainer input[type="text"] {
    width: calc(100% - 10px);
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#formContainer button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#formContainer button:hover {
    background-color: #0056b3;
}

.non-rectangulaire {
        border: none;
        border-bottom: 1px solid #ced4da; /* Bordure basse */
        border-radius: 0; /* Pas de bordure arrondie */
        box-shadow: none; /* Pas d'ombre */
        padding: 0; /* Pas de remplissage interne */
    }
    </style>
</head>
<body>

<div class="container">
        <div class="media">
            <div class="media-body">
               <img loading="lazy" src="Frontend/images/gallery/Q.png" alt="images" width="200" class="img-fluid">
            </div>
          </div>
  <h2 class="text-center mt-5" style="font-size: 17px;  padding-bottom:30px">Payer les ordonnances de vos proches sur KYCARE sans vous déplacer</h2>
    
    <form>
       
        <div class="form-group">
            <label for="nom et prenom">Nom et Prénom </label>
            <input type="text" class="form-control form-control-bar" id="nom-prenom" name="nom-prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" class="form-control form-control-bar" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="identifiant_proche">Identifiant du Proche </label>
            <input type="text" class="form-control form-control-bar" id="identifiant_proche" name="identifiant_proche" required>
        </div>
        <div class="form-group">
            <label for="numero_ordonnance">Numéro de l'Ordonnance </label>
            <input type="text" class="form-control form-control-bar" id="numero_ordonnance" name="numero_ordonnance" required>
        </div>


        <div class="form-group">
            <label>Mode de Paiement </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mode_paiement" id="carte" value="carte" required>
                <label class="form-check-label" for="carte">
                    Carte Bancaire
                </label>
            </div>
                <div id="formContainer" class="form-container" style="display: none;">
                    <form action="#" method="post" id="monFormulaire" enctype="multipart/form-data">

                        <div class="nein">
                            <label for="montant_payer">Montant à Payer:</label>
                            <input type="text" id="montant_payer" name="montant_payer" required>
                        </div>

                        <div class="nein">
                            <label for="numero_carte">Entrer votre numéro de paiement:</label>
                            <input type="text" id="numero_carte" name="numero_carte" required class="non-rectangulaire">
                        </div>

                        <button type="submit" id="payerMaintenantButton">Payer maintenant</button>
                        <br>
                        <button type="button" id="changerMethodePaiementButton">Changer la méthode de paiement</button>
                    </form>
                </div>

                <!--End carte banquaire-->

                        <div class="form-check">
                    <input class="form-check-input" type="radio" name="mode_paiement" id="mobile_money" value="mobile_money" required>
                    <label class="form-check-label" for="mobile_money">
                        Mobile money
                    </label>
                </div>

                <div id="formContainer" class="form-container" style="display: none;">
                    <form action="#" method="post" id="monFormulaire" enctype="multipart/form-data">

                        <div class="nein">
                            <label for="montant_payer">Montant à Payer:</label>
                            <input type="text" id="montant_payer" name="montant_payer" required>
                        </div>

                        <div class="nein">
                            <label for="numero_mobile">Entrer votre numéro mobile:</label>
                            <input type="text" id="numero_mobile" name="numero_mobile" required class="non-rectangulaire">
                        </div>

                        <button type="submit" id="payerMaintenantButton">Payer maintenant</button>
                        <br>
                        <button type="button" id="changerMethodePaiementButton">Changer la méthode de paiement</button>
                    </form>
                </div>
            <!--End mobile-money-->

            <div class="form-check">
                <input class="form-check-input" type="radio" name="mode_paiement" id="wave" value="wave" required>
                <label class="form-check-label" for="wave">
                  Wave
                </label>
            </div>

            <div id="formContainer" class="form-container" style="display: none;">
                    <form action="#" method="post" id="monFormulaire" enctype="multipart/form-data">

                        <div class="nein">
                            <label for="montant_payer">Montant à Payer:</label>
                            <input type="text" id="montant_payer" name="montant_payer" required>
                        </div>

                        <div class="nein">
                            <label for="numero_wave">Entrer votre numéro wave:</label>
                            <input type="text" id="numero_wave" name="numero_wave" required class="non-rectangulaire">
                        </div>

                        <button type="submit" id="payerMaintenantButton">Payer maintenant</button>
                        
                        <button type="button" id="changerMethodePaiementButton">Changer la méthode de paiement</button>
                    </form>
            </div>
            <!--End wave-->
        </div>

        
    </form>
</div>

<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="section-title text-center">
      <h3>Vous souhaitez un renseignement ?</h3>
              <p>
                Notre équipe prend contact avec vous.
              </p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
              <div class="address-block">
          <!-- Location -->
          <div class="media">
            <div class="media-body">
               <img loading="lazy" src="Frontend/images/gallery/aa.png" alt="images" width="700" class="img-fluid">
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
           
            <div class="media-body">
              
            </div>
          </div>
          </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <!-- contact form start -->
          <form action="!#" class="row">
            <!-- name -->
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Nom" required>
            </div>
            <!-- email -->
            <div class="col-lg-6">
              <input type="email" class="form-control main" placeholder="Email" required>
            </div>
            <!-- phone -->
            <div class="col-lg-12">
              <input type="text" class="form-control main" placeholder="Téléphone" required>
            </div>
            <!-- message -->
            <div class="col-lg-12">
              <textarea name="message" rows="10" class="form-control main" placeholder="Votre message"></textarea>
            </div>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Contactez les équipes</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>

<!-- Chargement de Bootstrap JS (facultatif) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

    document.getElementById("mobile_money").addEventListener("change", function() {
    if(this.checked) {
        var formContainer = document.getElementById("formContainer");
        formContainer.style.display = "block";
         formContainer.style.top = "40%";
        formContainer.style.left = "50%";
        formContainer.style.zIndex = "100"
        formContainer.style.transform = "translate(-50%, -50%)";
    }
});

document.getElementById("wave").addEventListener("change", function() {
    if(this.checked) {
        var formContainer = document.getElementById("formContainer");
        formContainer.style.display = "block";
         formContainer.style.top = "40%";
        formContainer.style.left = "50%";
        formContainer.style.zIndex = "100"
        formContainer.style.transform = "translate(-50%, -50%)";
    }
});

document.getElementById("carte").addEventListener("change", function() {
    if(this.checked) {
        var formContainer = document.getElementById("formContainer");
        formContainer.style.display = "block";
         formContainer.style.top = "40%";
        formContainer.style.left = "50%";
        formContainer.style.zIndex = "100"
        formContainer.style.transform = "translate(-50%, -50%)";
    }
});
</script>

</body>
</html>
