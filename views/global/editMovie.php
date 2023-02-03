<main class="movies">
  <div class="form">


    <form action="/editMovie/<?= $movie->id ?>" method="POST">
      <label><b>Titre</b></label>
      <input type="text" value="<?= $movie->title ?>" name="title" required>
      <label><b>Date</b></label>
      <input type="text" value="<?= $movie->date ?>" name="date" required>
      <label><b>Affiche</b></label>
      <input type="text" value="<?= $movie->poster ?>" name="poster" required>
      <label><b>Banniere</b></label>
      <input type="text" value="<?= $movie->banner ?>" name="banner" required>
      <label><b>Bande Annonce</b></label>
      <input type="text" value="<?= $movie->tailer ?>" name="tailer" required>
      <label><b>Synopsis</b></label>
      <input type="text" value="<?= $movie->synopsis ?>" name="synopsis" required>
      <label><b>Histoire</b></label>
      <input type="text" value="<?= $movie->story ?>" name="story" required>
      <label><b>Note</b></label>
      <input type="text" value="<?= $movie->note ?>" name="note" required>
      <label><b>Budget</b></label>
      <input type="text" value="<?= $movie->budget ?>" name="budget" required>
      <label><b>Recette</b></label>
      <input type="text" value="<?= $movie->recipe ?>" name="recipe" required>
      <label><b>Durée (en min)</b></label>
      <input type="text" value="<?= $movie->time ?>" name="time" required>

      <h2>Acteurs</h2>

      <h1>Liste d'acteurs</h1>
      <div id="actors">
        <?php foreach ($actors as $actor) : ?>
          <input class="semi-button" type="text" name="actor[]" value="<?= $actor->name ?>" placeholder="Nom de l'acteur">
          <input class="semi-button" type="text" name="name[]" value="<?= $actor->role ?>" placeholder="Nom du personnage">
        <?php endforeach; ?>
      </div>
      <input class="icon" type="button" value="+" onclick="addActor()">

      <input type="submit" id='submit' value='Enregistrer'>

    </form>

  </div>
</main>
<script>
  function addActor() {
    const actors = document.getElementById('actors');
    const name = document.createElement('input');
    name.type = 'text';
    name.name = 'name[]';
    name.placeholder = "Nom du personnage";
    name.classList.add('semi-button');
    const actor = document.createElement('input');
    actor.type = 'text';
    actor.name = 'actor[]';
    actor.placeholder = "Nom de l'acteur";
    actor.classList.add('semi-button');
    actors.appendChild(actor);
    actors.appendChild(name);

  }
</script>