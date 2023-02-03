<div class="login" id="container">
  <!-- zone de connexion -->
  <form action="/register" method="POST">
    <h1>Inscription</h1>

    <label><b>Nom d'utilisateur</b></label>
    <input type="text" minlength="3" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Mot de passe</b></label>
    <input type="password" minlength="3" placeholder="Entrer le mot de passe" name="password" required>

    <button class="button-login" type="submit" id='submit'>S'inscrire</button>

  </form>
</div>