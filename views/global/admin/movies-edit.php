<style>
  @import "https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css";

  * {
    color: #000000;
  }

  body {
    display: block;
    background-color: #ffffff;
  }

  header {
    display: none;
  }
</style>
<section class="section">
  <h1 class="title"><?= $movie->title ?></h1>
  <form action="/admin/movies/edit/<?= $movie->id ?>" method="post">
    <div class="field">
      <label class="label">Titre</label>
      <div class="control">
        <input class="input" type="text" name="title" value="<?= $movie->title ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Date</label>
      <div class="control">
        <input class="input" type="date" name="date" value="<?= $movie->date ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Image</label>
      <div class="control">
        <input class="input" type="text" name="poster" value="<?= $movie->poster ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Bannière</label>
      <div class="control">
        <input class="input" type="text" name="banner" value="<?= $movie->banner ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Bande-annone</label>
      <div class="control">
        <input class="input" type="text" name="tailer" value="<?= $movie->tailer ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Synopsis</label>
      <div class="control">
        <textarea class="textarea" name="synopsis"><?= $movie->synopsis ?></textarea>
      </div>
    </div>
    <div class="field">
      <label class="label">Histoire</label>
      <div class="control">
        <textarea class="textarea" name="story"><?= $movie->story ?></textarea>
      </div>
    </div>
    <div class="field">
      <label class="label">Note</label>
      <div class="control">
        <input class="input" type="number" name="note" value="<?= $movie->note ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Budget</label>
      <div class="control">
        <input class="input" type="number" name="budget" value="<?= $movie->budget ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Recette</label>
      <div class="control">
        <input class="input" type="number" name="recipe" value="<?= $movie->recipe ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Durée (en min)</label>
      <div class="control">
        <input class="input" type="number" name="time" value="<?= $movie->time ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Genre</label>
      <div class="control">
        <textarea class="textarea" name="genres"><?= $movie->genres ?></textarea>
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-link">Modifier</button>
      </div>
      <div class="control">
        <a href="/admin/movies" class="button is-link is-light">Retour</a>
      </div>
    </div>
  </form>
</section>