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
  <h1 class="title"><?= $movie->name ?></h1>
  <form action="/admin/actors/edit/<?= $movie->id ?>" method="post">
    <div class="field">
      <label class="label">Nom</label>
      <div class="control">
        <input class="input" type="text" name="name" value="<?= $movie->name ?>" required />
      </div>
    </div>
    <div class="field">
      <label class="label">Image</label>
      <div class="control">
        <input class="input" type="text" name="image" value="<?= $movie->image ?>" required />
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-link">Modifier</button>
      </div>
      <div class="control">
        <a href="/admin/actors" class="button is-link is-light">Retour</a>
      </div>
    </div>
  </form>
</section>