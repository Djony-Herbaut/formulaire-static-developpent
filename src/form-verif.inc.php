<div class="inner-form" role="form">
        <ul class="response-server">
            <?php
                if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['phone'])){

                    print "<pre>";
                        print_r($_POST);
                    print "</pre>";
                    
               /*  foreach ($_POST as $key => $value) {
                        if($_POST){
                            print "<li>".$key." : ".$value."</li>\n";
                        }
                        else{
                            die("<li>Erreur</li>\n");
                    }
                }  */  
            
                    if($_POST['nom'] && $_POST['prenom'] && $_POST['date'] && is_numeric($_POST['phone'])){
                        echo "<li>".strip_tags($_POST['nom'])."</li>
                        <li>".strip_tags($_POST['prenom'])."</li>
                        <li>".$_POST['date']."</li>
                        <li>".$_POST['phone']."</li>";
                    }           
                }
            ?>
        </ul>
   
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
