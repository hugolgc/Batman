<main class="actors">
  <div class="container">
    <h1>Acteurs</h1>
    <ul>

      <?php foreach ($actors as $actor) : ?>
        <li>
          <img src="<?= $actor->image ?>" alt="<?= $actor->name ?>" />
          <div class="content">
            <h2><?= $actor->name ?></h2>
            <p>
              <?php foreach ($actor->movies as $name) : ?>
                <?= $name ?><br />
              <?php endforeach; ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main>