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
  <h1 class="title">
    <a href="/admin/movies">Films</a> •
    <a href="/admin/actors">Acteurs</a> •
    <a href="/">Retour</a>
  </h1>
  <table class="table is-fullwidth">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($movies as $movie) : ?>
        <tr>
          <td><?= $movie->id ?></td>
          <td><?= $movie->title ?></td>
          <td>
            <a href="/admin/movies/edit/<?= $movie->id ?>">Éditer</a>
            <!-- • <a href="/admin/movies/delete/<?= $movie->id ?>">Supprimer</a> -->
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</section>