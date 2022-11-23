<?php require('partials/nav.php'); ?>
<?php require('partials/head.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <button class="bg-blue-500 hover:bg-blue-300 px-4 py-2 rounded mb-8">
      <a href="/notes">All Notes</a>
    </button>

    <p class="text-2xl">
      <?= $note['body'] ?>
    </p>
  </div>
</main>

<?php require('partials/footer.php'); ?>