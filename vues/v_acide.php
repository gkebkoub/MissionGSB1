    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				Comptable: <?php echo $_SESSION['prenom']." ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=ValidationFrais&action=choixVisiteur" title="Validation Frais ">Validation Frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=suiviPaiement" title="Suivi de paiements">Suivi de paiements</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>

<div id="contenu">