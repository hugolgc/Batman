<div class="login" id="container">
  <form action="/login" method="POST">
    <h1>Connexion</h1>

    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <button class="button-login" type="submit" id='submit'>Connexion</button>

    <a class="button-login" href="/register">Inscription</a>

  </form>

</div>