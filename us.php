<?php
$posts = [
  ['title' => 'U.S. news 1', 'published' => '26.09.25', 'author' => 'Kirill', 'body' => 'Some U.S. news 1'],
  ['title' => 'U.S. news 2', 'published' => '26.09.25', 'author' => 'Bogdan', 'body' => 'Some U.S. news 2'],
  ['title' => 'U.S. news 3', 'published' => '26.09.25', 'author' => 'Miron', 'body' => 'Some U.S. news 3'],
  ['title' => 'U.S. news 4', 'published' => '26.09.25', 'author' => 'Mark', 'body' => 'Some U.S. news 4'],
];
?>

<?php include __DIR__. '/partials/header.php'; ?>

  


<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container">
   
    <div class="row g-5">
      <div class="col-md-8">
        <?php include __DIR__ . '/partials/posts.php'; ?>
      </div>
      <div class="col-md-4">
        <?php include __DIR__ . '/partials/sidebar.php'; ?>
      </div>
    </div>
  </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
