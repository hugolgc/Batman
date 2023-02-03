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
        <th>Nom</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($actors as $actor) : ?>
        <tr>
          <td><?= $actor->id ?></td>
          <td><?= $actor->name ?></td>
          <td>
            <a href="/admin/actors/edit/<?= $actor->id ?>">Éditer</a>
            <!-- • <a href="/admin/actors/delete/<?= $actor->id ?>">Supprimer</a> -->
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</section>