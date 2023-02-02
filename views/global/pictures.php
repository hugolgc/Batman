<main class="pictures">
  <div class="container">
    <h1>Gallerie</h1>
    <ul>

      <?php foreach ($pictures as $picture) : ?>
        <li>
          <img src="<?= $picture->link ?>" />
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>