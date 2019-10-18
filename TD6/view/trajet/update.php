<?php
	$controller = static::$object;
	$loginParam = "";
	if($tAction == "create"){
		$loginParam = "required";
		$actionAfter = "created";
		$titreForm = "Création de " . ucfirst(static::$object);
	}else {
		$loginParam = "readonly";
		$actionAfter = "updated";
		$titreForm = "Mise à Jour de " . ucfirst(static::$object);
	}

    echo <<<EOT
	<form method="get" action="index.php">
	  <fieldset>
	    <legend>Mon formulaire de {$titreForm}:</legend>
	    
	    <p>
	      <label for="id_id">Id</label> :
	      <input type="text" value=$tid name="id" id="id_id" {$loginParam}/>
	    </p>
	    
	    <p>
	      <label for="depart_id">Depart</label> :
	      <input type="text" value=$tdepart name="depart" id="depart_id" required/>
	    </p>

	    <p>
	      <label for="arrivee_id">Arrivee</label> :
	      <input type="text" value=$tarrivee name="arrivee" id="arrivee_id" required/>
	    </p>
	    
	    <p>
	      <label for="date_id">Date</label> :
	      <input type="text" value=$tdate name="date" id="date_id" required/>
	    </p>
	    
	    <p>
	      <label for="nbplaces_id">Nbplaces</label> :
	      <input type="text" value=$tnbplaces name="nbplaces" id="nbplaces_id" required/>
	    </p>
	    	    
	    <p>
	      <label for="prix_id">Prix</label> :
	      <input type="text" value=$tprix name="prix" id="prix_id" required/>
	    </p>
	    	    
	    <p>
	      <label for="conducteur_login_id">Conducteur Login</label> :
	      <input type="text" value=$tconducteur_login name="conducteur_login" id="conducteur_login_id" required/>
	    </p>
	    
	    

	    <p>
	      <input type='hidden' name='action' value={$actionAfter}>
	      <input type='hidden' name='controller' value={$controller}>
	      <input type="submit" value="Envoyer" />
	    </p>
	  </fieldset> 
	</form>
EOT;


?>