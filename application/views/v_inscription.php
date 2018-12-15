<div id="inscription" align="center">
<form method="post" action="<?php echo site_url('utilisateur/contenu/inscription2');?>" >
</br></br>
<!-- <fieldset> -->
  <legend>Votre formulaire d'inscription</legend>
    <ul>
      <label for=login>Login</label>
      <input id=login name=login type=text placeholder="login" required autofocus>
      </br></br>
      <label for=pwd>Mot de passe</label>
      <input id=pwd name=pwd type=text placeholder="Mot de passe" required>
      </br></br>
      <label for=raisonSocialEntreprise>Raison Social de l'entreprise</label>
      <input id=raisonSocialEntreprise name=raisonSocialEntreprise type=text placeholder="Raison Social de l'entreprise" required>
      </br></br>
      <label for=numRueAcheteur>Numéro rue</label>
      <input id=numRueAcheteur name=numRueAcheteur type=text placeholder="Numéro rue" required>
      </br></br>
      <label for=RueAcheteur>Rue</label>
      <input id=RueAcheteur name=RueAcheteur type=text placeholder="Rue" required>
      </br></br>
      <label for=CPAcheteur>Code Postal</label>
      <input id=CPAcheteur name=CPAcheteur type=text placeholder="Code Postal" required>
      </br></br>
      <label for=VilleAcheteur>Ville</label>
      <input id=VilleAcheteur name=VilleAcheteur type=text placeholder="Ville" required>
      </br></br>
      <label for=numHabitationr>Numéro Habitation</label>
      <input id=numHabitation name=numHabitation type=text placeholder="Numéro Habitation" required>
      </br></br>
  </ul>
<!-- </fieldset> -->

<input type="submit" name="submit" value="Valider" method="post">

</br></br>
</form>

</br></br>
</div>


<script>alert("<?php echo htmlspecialchars('Félicitations, vous êtes inscrit !', ENT_QUOTES); ?>")</script>
