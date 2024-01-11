<?php
    include_once __DIR__."/head.inc.php";
?>
<body>
    <!-- https://codepen.io/gius-mili/pen/ZEoJGrB -->
    <header>
        <h1>Formulaire de contact</h1>
    </header>
    <main>
        
            <div class="inner-form" role="form">
                
           <!-- <ul class="response-server"></ul> espace reservé à la réponse bdd -->
   
            <fieldset>
                <legend>Espace membre</legend>
                <form action="index.php" method="post"> <!-- mettre le nom du fichier html dans aciton -->
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" aria-required="true"  autofocus>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" aria-required="true">

                    <label for="date">Date de naissance</label>
                    <input type="date" id="date" name="date" aria-required="true">
        
                    <label for="phone">Votre téléphone</label>

                    <input type="tel" id="phone" name="phone" aria-label="format à 10 chiffre" placeholder="téléphone" aria-required="true">

                    <small>Format: (+33)01-75-22-15-45</small>
                    <button type="submit" value="Envoyer" aria-label="cliquez pour envoyer">envoyer</button>

                </form>
            </fieldset>
        </div>
        </main>
    <footer>
        <p>
            &copy; - PHP -  08/01/2024 
        </p>
    </footer>
    
   
</body>