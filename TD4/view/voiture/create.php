<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        
        
          <!-- Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;-->

          <form method="get" action="routeur.php">
            <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <label for="immat_id">Immatriculation</label> :
              <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
            </p>
            
            <p>
              <label for="marque_id">Marque</label> :
              <input type="text" placeholder="Ex : Renault" name="marque" id="marque_id" required/>
            </p>

            <p>
              <label for="coul_id">Couleur</label> :
              <input type="text" placeholder="Ex : Bleu" name="couleur" id="coul_id" required/>
            </p>
            <p>
              <input type='hidden' name='action' value='created'>
              <input type="submit" value="Envoyer" />
            </p>
            </fieldset> 
          </form>

        

    </body>
</html> 



