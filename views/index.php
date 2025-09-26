<?php $posts = [
  ['title' => 'World news 1', 'published' => '26.09.25', 'author' => 'Kirill', 'body' => 'Some World news 1'],
  ['title' => 'World news 2', 'published' => '26.09.25', 'author' => 'Bogdan', 'body' => 'Some World news 2'],
  ['title' => 'World news 3', 'published' => '26.09.25', 'author' => 'Miron', 'body' => 'Some World news 3'],
  ['title' => 'World news 4', 'published' => '26.09.25', 'author' => 'Mark', 'body' => 'Some World news 4'],
];
?>
<?php include __DIR__. '/partials/header.php'; ?>


    <main class="container">
      <?php include __DIR__. '/partials/hero.php'; ?>
      <?php include __DIR__. '/partials/featured.php'; ?>

      <div class="row g-5">
        <div class="col-md-8">
      <?php include __DIR__. '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
               <?php include __DIR__. '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <?php include __DIR__. '/partials/footer.php'; ?>
